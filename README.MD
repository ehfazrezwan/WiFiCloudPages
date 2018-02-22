# aamra/WE WiFi Cloud Pages

** Cloud based pages for Mikrotik WiFi hotspots. Hits the [WiFiCloudAPI](https://github.com/ehfaz345/WiFiCloudAPI) to submit data to the RADIUS server and SMS gateway. **

### Description

The login.html page on the Mikrotik redirects the user to these pages (respective to the SSID) and the login process, until the OTP verification (which is handled by Mikrotik), is handled here.

The login process is as below:
1. User enters name and mobile number
2. Details are sent to the WiFiCloudAPI
3. User is presented with the prompt to enter mobile number and OTP
4. Details are then submitted to the Mikrotik page

The flow of data within the scripts is as below:
1. User enters information on index.php
2. User's information is submitted to login.php - which submits data to API and displays password entry page to user
3. User enters mobile number and password on login.php
4. Mobile number and password are sent to verify.php - which redirects the user to the Mikrotik page with the information they have entered

### Structure

```
│   README.MD
│
├───AamraWiFiCloud
│   │   alogin.php
│   │   config.txt
│   │   func.php
│   │   index.php
│   │   login.php
│   │   verify.php
│   │
│   ├───css
│   │       bootstrap.min.css
│   │       responsive.css
│   │       style.css
│   │
│   ├───fonts
│   │       glyphicons-halflings-regular.eot
│   │       glyphicons-halflings-regular.svg
│   │       glyphicons-halflings-regular.ttf
│   │       glyphicons-halflings-regular.woff
│   │       glyphicons-halflings-regular.woff2
│   │       neo_sans-webfont.eot
│   │       neo_sans-webfont.svg
│   │       neo_sans-webfont.ttf
│   │       neo_sans-webfont.woff
│   │       neo_sans-webfont.woff2
│   │
│   ├───img
│   │   │   bg_main.jpg
│   │   │   container-bg.png
│   │   │   f-logo.png
│   │   │   f-logo_m.png
│   │   │   pass-of.png
│   │   │   top_logo.png
│   │   │   top_logo_m.png
│   │   │   WE-Ad.gif
│   │   │
│   │   └───New folder
│   │           2bg-a.png
│   │           2bg.png
│   │           aa-n-m.png
│   │           bg_main.jpg
│   │           container-bg.png
│   │           f-logo.png
│   │           f-logo_m.png
│   │           i-agree.png
│   │           i-agree2.png
│   │           M-bg.png
│   │           mob-butt.png
│   │           t.png
│   │           top_logo.png
│   │           top_logo_m.png
│   │           WE-Ad.gif
│   │
│   ├───js
│   │       bootstrap.min.js
│   │       jquery-1.4.4.js
│   │       jquery.js
│   │       jquery.min.js
│   │
│   └───nbproject
│       │   project.properties
│       │   project.xml
│       │
│       └───private
│               private.properties
│
└───WEWiFiCloud
    │   alogin.php
    │   config.txt
    │   func.php
    │   index.php
    │   login.php
    │   verify.php
    │
    ├───css
    │       bootstrap.min.css
    │       responsive.css
    │       style.css
    │
    ├───fonts
    │       glyphicons-halflings-regular.eot
    │       glyphicons-halflings-regular.svg
    │       glyphicons-halflings-regular.ttf
    │       glyphicons-halflings-regular.woff
    │       glyphicons-halflings-regular.woff2
    │       neo_sans-webfont.eot
    │       neo_sans-webfont.svg
    │       neo_sans-webfont.ttf
    │       neo_sans-webfont.woff
    │       neo_sans-webfont.woff2
    │
    ├───img
    │   │   bg_main.jpg
    │   │   container-bg.png
    │   │   f-logo.png
    │   │   f-logo_m.png
    │   │   pass-of.png
    │   │   top_logo.png
    │   │   top_logo_m.png
    │   │   WE-Ad-ss.gif
    │   │   WE-Ad.gif
    │   │
    │   └───New folder
    │           2bg-a.png
    │           2bg.png
    │           aa-n-m.png
    │           bg_main.jpg
    │           container-bg.png
    │           f-logo.png
    │           f-logo_m.png
    │           i-agree.png
    │           i-agree2.png
    │           M-bg.png
    │           mob-butt.png
    │           t.png
    │           top_logo.png
    │           top_logo_m.png
    │           WE-Ad.gif
    │
    ├───js
    │       bootstrap.min.js
    │       jquery-1.4.4.js
    │       jquery.js
    │       jquery.min.js
    │
    └───nbproject
        │   project.properties
        │   project.xml
        │
        └───private
                private.properties
```
