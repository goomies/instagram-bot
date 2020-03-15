from selenium import webdriver
from time import sleep
from secrets import *

class InstaBot:
    def __init__(self, username, password):

        self.driver = webdriver.Chrome()
        self.username = username

        # Open instagram with ChromeDriver
        self.driver.get("https://www.instagram.com")
        sleep(2)

        # Connect to instagram with login and password
        self.driver.find_element_by_xpath("//input[@name=\"username\"]")\
            .send_keys(username)
        self.driver.find_element_by_xpath("//input[@name=\"password\"]")\
            .send_keys(password)
        self.driver.find_element_by_xpath('//button[@type="submit"]')\
            .click()
        sleep(4)

        # Turn notifications off
        self.driver.find_element_by_xpath("//button[contains(text(), 'Plus tard')]")\
            .click()
        sleep(2)

    def follow(self):
        self.driver.find_element_by_xpath('//*[@id="react-root"]/section/nav/div[2]/div/div/div[2]/input')\
            .send_keys('music')
        sleep(2)

# Intances
my_bot = InstaBot(username, password)