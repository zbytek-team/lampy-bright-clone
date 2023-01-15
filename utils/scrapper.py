#!/usr/bin/python3

from bs4 import BeautifulSoup
import requests
import json

BASE_URL = "https://www.lampy-bright.pl"


def get_cat():
    page = requests.get(BASE_URL)
    soup = BeautifulSoup(page.content, 'html.parser')

    photos = soup.findAll("img", attrs={"class": "color0 colordefault"})

    categories = soup.findAll("li", attrs={"class": "parent noclick style0"})
    categories = categories[0:10]
    cat_ret = []
    for cat in categories:
        print(f"adding category: {cat.find('a').getText().strip()}")

        cat_name = cat.find("a").getText().strip()
        subs = cat.findAll("a", attrs={"class": "nochildren"})
        for sub in subs:
            print(f"adding subcategory: {sub.getText().strip()}")
            sub_name = sub.getText().strip()
            sub_href = sub.get("href")
            cat_ret.append([cat_name, sub_name, sub_href])

    return (cat_ret)


def get_prod(link):
    url = BASE_URL + link
    page = requests.get(url)
    soup = BeautifulSoup(page.content, 'html.parser')

    items = soup.findAll("div", attrs={"class": "item"})
    photos = soup.findAll("img", attrs={"class": "color0 colordefault"})
    infos = soup.findAll("div", attrs={"class": "name"})
    products = []
    for photo, info, item in zip(photos, infos, items):
        print(f"adding product: {info.getText().strip()}")
        link = photo.get("src")
        name = info.getText().strip()
        web_link = item.find("a").get("href")

        products.append([link, name, BASE_URL + web_link])
    return products


def get_prod_info(link, cat_name, sub_name, prod_name, img):
    page = requests.get(link)
    soup = BeautifulSoup(page.content, 'html.parser')

    id_div = soup.find("div",  attrs={"class": "sku"})
    price = soup.find("price", attrs={"id": "prCurrent"}).getText()

    info = soup.find("div", attrs={"id": "description"}).getText()
    id_prod = id_div.find("strong").getText()

    return {"category": cat_name,
            "sub_category": sub_name,
            "product_name": prod_name,
            "image": img,
            "product_id": id_prod,
            "price": price,
            "info": info}


cats = get_cat()
prod = []

for c in cats:
    product_list = get_prod(c[2])
    for p in product_list:
        tmp = get_prod_info(p[2], c[0], c[1], p[1], p[0])
        prod.append(tmp)

with open('./prod.json', 'w') as json_file:
    json.dump(prod, json_file, indent=2)

with open('/var/www/html/back-office/prod.json', 'w') as json_file:
    json.dump(prod, json_file, indent=2)