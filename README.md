Powered By:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Pixelated Warrior
A web based RPG game where you will go for a **journey as a warrior** that will fight *sus amogus* around **by doing programming quiz**. You can also use your hard earned credits from your *Sus Rush journey* to *buy equipments* and do *PvP with other players* (To be implemented feature). 
<br/>
Zipped Source: https://drive.google.com/file/d/1ziHbCJMqtrnp8_SI2pua5QxiG00wturW/view?usp=sharing

## Running Repo After Cloning
1. Run `composer install` to generate depedencies in vendor folder.
2. Create <ins>.env<ins> file in the root of the project (next to <ins>.env.example<ins>).
3. Copy all data inside <ins>.env.example<ins> to <ins>.env<ins>.
4. Run `php artisan key:generate` to generate application key.
5. Configure <ins>.env<ins> (see the details below).
6. Make MySql database based on <ins>.env</ins> database name.
7. Run `php artisan migrate:fresh`.
8. Run `php artisan storage:link`.
9. Run the app using using `php artisan serve`

## Configuring .env
Some section of the environment variables might be generated by default, but, there are still some extra variables that you should add in order for the application to work. You will have to add `GOOGLE_CLIENT_ID` and `GOOGLE_CLIENT_SECRET` to the environment file since we will require that for our login from Google function.
- First thing first, you will have to make a project in Google Cloud. Go to: https://console.cloud.google.com/
- After that, you can go to https://console.cloud.google.com/apis/credentials and you need to make **OAuth 2.0 Client ID**. (you will also wanna make sure to authorize `http://127.0.0.1:8000/auth/callback` in the credential redirect URI authorization). 
- After finished making OAuth 2.0 Client ID, you can now download your OAuth credentials and put it inside your .env file.

## Key Features
- Standard Login and Register with validation
- Google Login and Register
- Layouting and components sourcing 
- Laravel Authorization functionalities
- MySql-Laravel eloquent database
- Picture file uploading to change profile picture
- External API request using Curl (for the quiz function)

## Application Preview
**Video Preview:**
<br/>
<video src='your URL here' width=300/>
<br/>
**Home page** where your journey begin
<br/>
<img alt="" src="/storage/app/previews/1.png" height="250px">
<br/>
**Register and Login** page to sign yourself to the game, you can also use **sign in using Google** feature for easier signing.
<br/>
<img alt="" src="/storage/app/previews/2.png" height="250px">
<br/>
<img alt="" src="/storage/app/previews/3.png" height="250px">
<br/>
Your **Home page** after signed in for easier navigation to your destination
<br/>
<img alt="" src="/storage/app/previews/4.png" height="250px">
<br/>
Your **Profile page** where you can see your adventure history, profile, and also **upload a picture to change your profile**
<br/>
<img alt="" src="/storage/app/previews/5.png" height="250px">
<br/>
<img alt="" src="/storage/app/previews/6.png" height="250px">
<br/>
The pixel **Sus Rush** page where you will go for your adventure
<br/>
<img alt="" src="/storage/app/previews/7.png" height="250px">
<br/>

## External Sources
- Quiz Open API: https://opentdb.com/api_config.php
- Pixel Arts: http://pixelartmaker.com/gallery

## To Do List
- Beautify FaQ and About page
- User stats (xp, level, cp)
- User Equipment
- Item Market and Leaderboard
- PvP Battle
- Content idea elaboration & NFT Integration (?)
