import os
import sys
# import subprocess # Not installed yet
# import keyboard # Not installed yet
from datetime import datetime
# Script to automate Laravel App configurations

# launch Laragon server
# TODO: fix this
def launchLaragon():
    subprocess.call(args=['C:\laragon\laragon.exe'])
    keyboard.press('enter')

# type in console
def console(command: str):
    # execute command on the console
    return os.system(command)

# clear console
# console('cls')

# Server launcher
def launchServer():
    try:
        # launch client server
        console('php artisan serve')
        # success message
        print("[INFO] Server launched successfully !")
    except:
        print("[ERROR] Failed to launch the server.")


# API Server launcher
def launchApiServer():
    try:
        # launch client server
        console('php artisan serve --host=0.0.0.0')
        # success message
        print("[INFO] Server launched successfully !")
    except:
        print("[ERROR] Failed to launch the server.")


# Preconfigurations launcher
def preconfigs():
    try:
        # launch migrations & seeders
        console('php artisan migrate:fresh --seed')
        # install passport access keys
        console('php artisan passport:install')
        # success message
        print("[INFO] Preconfigurations executed successfully !")
    except:
        print("[ERROR] Unable to launch preconfigurations.")


# console args manager
executor = {
    'launchLaragon': launchLaragon,
    'launchServer': launchServer,
    '--ls': launchServer,
    'launchApiServer': launchApiServer,
    '--las': launchApiServer,
    'preconfigs': preconfigs,
}
args = sys.argv  # get arguments
args.pop(0)  # remove script name
if len(sys.argv) >= 1:
    for arg in sys.argv:
        if arg in executor:
            print(f"[INFO] Argument [{arg}] called.")
            executor[arg]()
            execution_date = datetime.now().strftime("%d/%m/%Y %H:%M:%S")
            print(f"[DATE] Last execution: {execution_date}")
        else:
            print(f"[ERROR] Argument [{arg}] is not define.")
else:
    print("[ERROR] No argument passed.")
