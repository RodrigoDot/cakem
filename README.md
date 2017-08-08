This is my first project using cakephp 3

first thing to do

* initiate the git repository
* git init
* git commit -m "first commit"

second thing to do

* initiate the composer repository
* composer init
* composer create-project --prefer-dist cakephp/app

thirth thing to do

* configurate the database connection 
* go to app\config\app.php
* go to datasources about 200th line
* change the data to be able to access yout prefered database on default database
    *username
    *password
    *database

forth thing to do

* import the theme on the root directory of the project
* composer require cakephp-brasil/twitter-bootstrap:dev-master
* go to config\bootstrap.php and add Plugin::load('TwitterBootstrap'); at the end os the file
* go to src\view\appview.php and add $this->LoadHelper('Form', ['className'=>'TwitterBootstrap.Form']); on the initialize method
* go to src\controller\appcontroller.php and add $this->viewBuilder()->theme('TwitterBootstrap');  on the initialize method
* go to src\controller\appcontroller.php and add $this->viewBuilder()->layout('adminlte'); on the initialize method

fifth thing to do 

* ativate the layout
* run this on console bin\cake TwitterBootstrap.publish all
* now we have the layout files at src\template\element

_________

sixth thing to do

* initiate the migrations database
* run bin\cake kabe migration TableName to create your tables  
* go to config\migrations and you will be able to personalize your tables following the rules of Migration`s Development
