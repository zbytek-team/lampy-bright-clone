from selenium import webdriver
import random
import time


# Log in
def log_in(browser):
    # Open the login page
    browser.get("https://localhost/index.php?controller=authentication&back=my-account")

    # Fill in the form
    # Email
    browser.find_element("id", "field-email").send_keys("JDoe@test.com")

    # Password
    browser.find_element("id", "field-password").send_keys("Jo4nDo3")

    # Submit the form
    browser.find_element("id", "submit-login").click()
