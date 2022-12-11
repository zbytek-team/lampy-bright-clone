from selenium import webdriver
import random
import time

from selenium.webdriver import Keys


# Adding 10 products to the cart from different categories
def add_products(browser, categories, products_number):
    # Get the list of categories
    for i in categories:
        # Get the list of categories
        browser.get(f"https://localhost/index.php?id_category={i}&controller=category")

        # Define the list of used products
        products_used = []

        # Add 5 products to the cart
        for j in range(0, products_number):

            # Get the list of products
            products = browser.find_elements("class name", "product-thumbnail")

            # Remove used products from the list
            for remove in products_used:
                products.pop(remove)

            # Get random product
            p = random.randint(0, len(products) - 1)

            # Click on the product
            products[p].click()

            # Add p to the list of used products
            products_used.append(p)



            # Set the quantity to random number between 1 and 5
            quantity = browser.find_element("id", "quantity_wanted")
            quantity.click()
            quantity.send_keys(Keys.BACKSPACE)
            quantity.send_keys(str(random.randint(1, 5)))
            # Add the product to the cart
            browser.find_element("class name", "add-to-cart").click()

            # Wait for the page to load
            time.sleep(1)

            # Continue shopping
            browser.find_element("id", "blockcart-modal").click()

            # Return to the previous page
            browser.get(f"https://localhost/index.php?id_category={i}&controller=category")
