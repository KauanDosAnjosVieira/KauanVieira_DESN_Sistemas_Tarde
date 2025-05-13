@echo off
xcopy /E /H /Y /I "C:\xampp\htdocs\KauanVieira_SQLINJECT"
cd "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde"
git add .
git commit -m "Atualizando conteudo"
git push origin main
pause
