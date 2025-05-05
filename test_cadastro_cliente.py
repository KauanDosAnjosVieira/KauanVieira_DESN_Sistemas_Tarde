from selenium import webdriver
from selenium.webdriver.common.by import By
import time


driver = webdriver.Chrome()

driver.get("C:/Users/lucas_santos100/Documents/GitHub/Lucas_Teste/index.html")

nome_input= driver.find_element(By.ID, "name")
nome_input.send_keys("Lucas Santos")

time.sleep(0.6)

cpf_input= driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

time.sleep(0.6)

endereco_input= driver.find_element(By.ID, "adress")
endereco_input.send_keys("Rua das Flores")

time.sleep(0.6)

telefone_input= driver.find_element(By.ID, "phone")
telefone_input.send_keys("12345678901")

time.sleep(0.6)

submit_button = driver.find_element(By.ID, "submit")
submit_button.click()

time.sleep(10000)

driver.quit()