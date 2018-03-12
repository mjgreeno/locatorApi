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




# This is an <h1> tag
## This is an <h2> tag
###### This is an <h6> tag


*This text will be italic*
_This will also be italic_

**This text will be bold**
__This will also be bold__

_You **can** combine them_



http://github.com - automatic!
[GitHub](http://github.com)


```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```