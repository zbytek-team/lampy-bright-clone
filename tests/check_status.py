from selenium import webdriver
import time


# Check package status
def check_status(browser):
    # Open the history page
    browser.get("https://localhost/index.php?controller=history")

    # Get the list of orders
    browser.find_elements("xpath", "//a[@data-link-action='view-order-details']")[0].click()

    time.sleep(5)
