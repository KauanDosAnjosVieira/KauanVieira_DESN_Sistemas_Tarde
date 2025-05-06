@echo off
xcopy /E /H /Y /I "C:\xampp\htdocs\CONEXAO_SCRIPT" "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde\php"
cd "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde\php"
git add .
git commit -m "PHP"
git push origin main
pause
