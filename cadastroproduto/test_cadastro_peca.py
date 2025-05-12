from selenium import webdriver
from selenium.webdriver.common.by import By
import time


driver = webdriver.Chrome()

driver.get("C:/Users/kauan_a_vieira/Documents/GitHub/KauanVieira_DESN_Sistemas_Tarde/TesteSistemas/cadastroproduto/produto.html")

codpeca_input= driver.find_element(By.ID, "codpeca")
codpeca_input.send_keys("13")

time.sleep(0.6)

desc_input= driver.find_element(By.ID, "desc")
desc_input.send_keys("Peça para computador")

time.sleep(0.6)

marca_input= driver.find_element(By.ID, "marca")
marca_input.send_keys("Intel")

time.sleep(0.6)

qtd_input= driver.find_element(By.ID, "preco")
qtd_input.send_keys("1000,00")

qtd_input= driver.find_element(By.ID, "qtd")
qtd_input.send_keys("2")

time.sleep(0.6)

submit_button = driver.find_element(By.ID, "submit")
submit_button.click()

time.sleep(10000)

driver.quit()