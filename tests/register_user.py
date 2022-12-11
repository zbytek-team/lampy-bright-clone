from selenium import webdriver
import random
import time

# Register user
def register_user(browser):
    # Open the registration page
    browser.get("https://localhost/index.php?controller=authentication&back=my-account")

    # Proceed to registration
    browser.find_element("class name", "no-account").click()

    # Fill in the form
    # Gender
    browser.find_element("id", "field-id_gender-1").click()

    # First name
    browser.find_element("id", "field-firstname").send_keys("John")

    # Last name
    browser.find_element("id", "field-lastname").send_keys("Doe")

    # Email
    browser.find_element("id", "field-email").send_keys("JDoe4@test.com")

    # Password
    browser.find_element("id", "field-password").send_keys("Jo4nDo3")

    # Date of birth
    browser.find_element("id", "field-birthday").send_keys("2000-01-01")

    # Accept privacy policy find by name
    browser.find_element("name", "customer_privacy").click()

    # Accept terms of service
    browser.find_element("name", "psgdpr").click()

    # Submit the form
    browser.find_element("class name", "form-control-submit").click()