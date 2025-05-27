@echo off
setlocal ENABLEDELAYEDEXPANSION

:: === CONFIGURATION ===
set "LARAVEL_DIR=%cd%"
set "XAMPP_DIR=C:\xampp"
set "DB_NAME=laravel"
set "DB_USER=root"
set "DB_PASS="
set "DB_HOST=127.0.0.1"
set "DB_PORT=3306"

:: === Step 1: Start MySQL from XAMPP ===
echo [1] Checking MySQL status...
tasklist | find /i "mysqld.exe" >nul
if errorlevel 1 (
    echo MySQL is not running. Starting MySQL...
    pushd "%XAMPP_DIR%"
    start "" xampp-control.exe
    timeout /t 5 >nul
    popd
) else (
    echo MySQL is already running.
)

:: === Step 2: Fix .env File ===
echo [2] Checking and fixing .env file...
cd /d "%LARAVEL_DIR%"
if not exist ".env" (
    echo .env file not found. Exiting...
    exit /b
)

powershell -Command "(Get-Content .env) -replace 'DB_HOST=.*', 'DB_HOST=%DB_HOST%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'DB_PORT=.*', 'DB_PORT=%DB_PORT%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'DB_DATABASE=.*', 'DB_DATABASE=%DB_NAME%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'DB_USERNAME=.*', 'DB_USERNAME=%DB_USER%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'DB_PASSWORD=.*', 'DB_PASSWORD=%DB_PASS%' | Set-Content .env"

:: === Step 3: Clear Laravel Cache ===
echo [3] Clearing Laravel cache and config...
php artisan config:clear >nul
php artisan cache:clear >nul
php artisan config:cache >nul

:: === Step 4: Check and Create Database (Optional Silent Mode) ===
echo [4] Ensuring database "%DB_NAME%" exists...
echo CREATE DATABASE IF NOT EXISTS %DB_NAME%; > temp.sql
"%XAMPP_DIR%\mysql\bin\mysql.exe" -u %DB_USER% -e "source temp.sql"
del temp.sql >nul

:: === Step 5: Start Laravel server ===
echo [5] Starting Laravel development server...
start http://127.0.0.1:8000
php artisan serve

endlocal
pause
