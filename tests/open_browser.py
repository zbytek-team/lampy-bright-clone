from selenium import webdriver
from selenium.webdriver import DesiredCapabilities
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
import time


# Connect to the Localhost server and open the browser function
def connect_to_server():
    # Set the path to the ChromeDriver
    brave_path = 'C:\\Program Files\\BraveSoftware\\Brave-Browser\\Application\\brave.exe'

    # Set options for the browser
    options = Options()
    options.binary_location = brave_path
    caps = DesiredCapabilities().CHROME
    caps["pageLoadStrategy"] = "eager"
    # Set the webdriver service
    browser = webdriver.Chrome(options=options, desired_capabilities=caps, service=Service(ChromeDriverManager().install()))

    # Connect to localhost
    browser.get('https://localhost/index.php')

    # Continue to the site (because of the self-signed certificate)
    browser.find_element("id", "details-button").click()
    browser.find_element("id", "proceed-link").click()

    # Wait for the page to load
    time.sleep(1)

    # Return the browser
    return browser
