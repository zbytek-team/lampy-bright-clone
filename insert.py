#!/usr/bin/python3
# -*- coding: utf-8 -*-

from prestapyt import PrestaShopWebServiceDict
import requests
import json
import xml.etree.ElementTree as ET

API_KEY = "IVKR2R5IEI3KTU1SFZIDZK5GL1QTEGPK"


def rem_product(connection):
    prod = []
    classes = connection.get("products")["products"]["product"]
    for key in classes:
        prod.append(key["attrs"]["id"])
    connection.delete("products", resource_ids=prod)


def rem_cats(connection):
    cat = list(range(3, 10))
    # classes = connection.get("categories")["categories"]["category"]
    # for key in classes:
    #     cat.append(key["attrs"]["id"])
    connection.delete("categories", resource_ids=cat)


def add_cats(connection, amount):
    print("adding categories")

    cat_tab = {}
    for i in range(amount):
        connection2 = PrestaShopWebServiceDict(
            'http://localhost/api/categories/' + str(i+1), API_KEY)
        classes = connection2.get("category")[
            "category"]["name"]["language"]["value"]
        cat_tab[classes] = i+1

    with open("prod.json", "r") as prod_json:
        p_j = json.load(prod_json)
        cat_list = []
        for category in p_j:
            tmp_str = category['category']
            if tmp_str not in cat_list:
                cat_list.append(tmp_str)

    with open("categories-temp.xml", "r", encoding='utf-8') as cat_file:
        cat_temp_output = cat_file.read()
        for cat in cat_list:
            print(f"adding category: {cat}")
            parent = "<![CDATA[2]]>"  # parent
            name = "<![CDATA[3]]>"  # name
            cat_output = cat_temp_output.replace(
                parent, "<![CDATA[" + str(cat_tab["Strona główna"]) + "]]>")
            cat_output = cat_output.replace(name, "<![CDATA[" + cat + "]]>")
            tree = ET.fromstring(cat_output)
            xx = connection.add('categories', ET.tostring(tree))


def add_subs(connection, main_cat_len):
    print("adding subcategories")
    cat_tab = {}

    for i in range(main_cat_len):
        connection2 = PrestaShopWebServiceDict(
            'http://localhost/api/categories/' + str(i+1), API_KEY)
        classes = connection2.get("category")[
            "category"]["name"]["language"]["value"]
        cat_tab[classes] = i+1

    with open("prod.json", "r") as prod_json:
        p_j = json.load(prod_json)
        sub_list = []
        for category in p_j:
            cat_str = category['category']
            sub_str = category['sub_category']
            if [cat_str, sub_str] not in sub_list:
                sub_list.append([cat_str, sub_str])
    with open("categories-temp.xml", "r") as cat_file:
        cat_temp_output = cat_file.read()
        for sub in sub_list:
            print(f"adding subcategory: {sub[1]}")
            parent = "<![CDATA[2]]>"  # parent
            name = "<![CDATA[3]]>"  # name
            cat_output = cat_temp_output.replace(
                parent, "<![CDATA[" + str(cat_tab[sub[0]]) + "]]>")
            cat_output = cat_output.replace(name, "<![CDATA[" + sub[1] + "]]>")
            tree = ET.fromstring(cat_output)
            xx = connection.add('categories', ET.tostring(tree))


def get_cat_ids(amount):
    cat_tab = {}
    for i in range(amount):
        connection2 = PrestaShopWebServiceDict(
            'http://localhost/api/categories/' + str(i+1), API_KEY)
        classes = connection2.get("category")[
            "category"]["name"]["language"]["value"]
        cat_tab[classes] = i+1
    with open('./backoffice/cat_id.json', 'w') as json_file:
        json.dump(cat_tab, json_file, indent=2)
    # print(cat_tab)


def main():
    session = requests.Session()
    session.verify = False
    connection = PrestaShopWebServiceDict('http://localhost/api', API_KEY)

    try:
        rem_product(connection)
    except:
        pass

    classes = connection.get("categories")["categories"]["category"]
    add_cats(connection, len(classes))
    classes2 = connection.get("categories")["categories"]["category"]
    add_subs(connection, len(classes2))
    classes3 = connection.get("categories")["categories"]["category"]
    get_cat_ids(len(classes3))
    
    try:
        rem_cats(connection)
    except:
        pass

if __name__ == '__main__':
    main()
