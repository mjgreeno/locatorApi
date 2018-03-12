# Pharmacy Locator API
This is a small  locator API that allows users to register and look for specific pharmacies based on Latitude and Longitude


##Installation

* Clone Git Repository
* Run Composer Install
  * Hook up Database
    * setup .env file Database and setup
  * Once Connected Run Database Migrations and Seeder
  ```javascript
    php artisan migrate
    php artisan passport:install
    php artisan db:seed --class=LocationTableSeeder
  ```

##Postman Usage
[PostMan](https://www.getpostman.com/) is an API tool that allows for testing and looking at return data refer to documentation for setting up

###Swagger Documentation
As a brief explanation of the API once the site is setup I have used Swagger Docs to detail the api information upon configuration

```javascript
    php artisan serve  
  ```

then follow /api/documentation

##Endpoints

GET
/api/location
List all pharmacy locations

GET
/api/location/{ID}
List one pharmacy locations

GET
/api/locationnearest
List all pharmacy locations


