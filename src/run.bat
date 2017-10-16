@echo off
:: ========================================================================
:: $File: run.bat $
:: $Date: 2017-10-09 13:43:09 $
:: $Revision: $
:: $Creator: Jen-Chieh Shen $
:: $Notice: See LICENSE.txt for modification and distribution information
::                    Copyright (c) 2017 by Shen, Jen-Chieh $
:: ========================================================================


:: Setup the project root first.
set PROJECT_ROOT=..\


:: Goto project root.
cd %PROJECT_ROOT%

:: get the current directory name.
for %%* in (.) do set PROJECT_NAME=%%~nx*

set ENVIRONMENT_ROOT="C:\AppServ\www"

:: set the current directory
set CURRENT_DIR=%CD%

:: go up environment directory.
cd %ENVIRONMENT_ROOT%

:: remove the what ever the copy are previously
rmdir %PROJECT_NAME% /s /q

:: create/overwrite the project directory.
mkdir %PROJECT_NAME%

cd %PROJECT_NAME%

:: copy the whole folder to evironment root directory
xcopy /s %CURRENT_DIR% %CD%


:: start the chrome and run the url locally
start chrome 127.0.0.1:8080/%PROJECT_NAME%


:: go back the the root directory
cd %CURRENT_DIR%

echo.
