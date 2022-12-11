from selenium import webdriver
import random
import time


# Complete the order
def complete_order(browser):
    # Enter the order page
    browser.get("https://localhost/index.php?controller=order")

    # Fill in the address form
    # Alias
    browser.find_element("id", "field-alias").send_keys("JD")

    # Adress
    browser.find_element("id", "field-address1").send_keys("123 Main St")

    # Post code
    browser.find_element("id", "field-postcode").send_keys("00-000")

    # City
    browser.find_element("id", "field-city").send_keys("New York")

    # Continue
    browser.find_element("name", "confirm-addresses").click()
    time.sleep(1)
    # Fill in the delivery form
    browser.find_element("id", "delivery_option_17").click()

    # Continue
    browser.find_element("name", "confirmDeliveryOption").click()

    # Wait for the payment form to load
    time.sleep(1)
    # Fill in the payment form
    # Pay online
    browser.find_element("xpath", "//span[text()='Zapłać przelewem']").click()
    browser.find_element("id", "conditions_to_approve[terms-and-conditions]").click()
    time.sleep(1)
    # Confirm the order
    browser.find_element("xpath", "//button[@class = 'btn btn-primary center-block']").click()
