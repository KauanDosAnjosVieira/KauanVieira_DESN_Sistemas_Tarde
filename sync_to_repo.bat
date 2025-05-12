@echo off
xcopy /E /H /Y /I "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde\TesteSistemas"
cd "C:\Users\kauan_a_vieira\Documents\GitHub\KauanVieira_DESN_Sistemas_Tarde"
git add .
git commit -m "Atualizando do conteudo"
git push origin main
pause
