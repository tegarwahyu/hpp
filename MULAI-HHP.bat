@echo off
cd /d "%~dp0"
echo HHP Land Arrangement - http://127.0.0.1:8013
php artisan serve --host=127.0.0.1 --port=8013
pause
