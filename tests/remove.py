from selenium import webdriver
import random
import time

# Remove one product from the cart
def remove_product(browser):
    # Enter the cart
    browser.get("https://localhost/index.php?controller=cart&action=show")

    # Get the list of products
    products = browser.find_elements("class name", "remove-from-cart")

    # Get random product
    p = random.randint(0, len(products) - 1)

    # Click on the product
    products[p].click()

