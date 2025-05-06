@echo off
xcopy /E /H /Y /I "C:\xampp\htdocs\CONEXAO_SCRIPT" "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde"
cd "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde"
git add .
git commit -m "Atualização"
git push origin main
pause
