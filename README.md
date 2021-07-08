This project is completely developed in PHP Laravel framework. 


How to settup the project in your local system, follow the steps:-

	1) Clone the repo and cd into it
	2) Open terminal from the folder and type:
			composer install
	3) Rename or copy .env.example file to .env
	4) php artisan key:generate
	5) Set your database credentials in your .env file
	6) Run the command to get db
			php artisan migrate    //run the command
            php artisan db:seed
	7) Run command   :
		npm install
	8) and	
		npm run watch
	9) Run command:
		php artisan serve 
			OR 
	    use virtual host
	10) Visit localhost:8000 in your browser
	11) For access to admin panel enter the admin username and password and for user enter user's too.



                NOTE
    ------------------------------

    * Run seeder to get test datas
    * Watch seeder value for username and password
