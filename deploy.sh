#! /bin/bash
echo "Instalando npm...";
npm install;
echo "Ejecuntando comando build... (Vite)";
npm run build;
echo "Compimiendo assets transpilados";
echo "Ejecutando Composer install";
composer install;