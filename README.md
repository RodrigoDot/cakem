This is my first project using cakephp 3

---
first thing to do
---

* initiate the git repository
* git init
* git commit -m "first commit"

---
second thing to do
---

* initiate the composer repository
* composer init
* composer create-project --prefer-dist cakephp/app

---
third thing to do
---

* configurate the database connection 
* go to app\config\app.php
* go to datasources about 200th line
* change the data to be able to access yout prefered database on default database
    *username
    *password
    *database

---
forth thing to do
---

* import the theme on the root directory of the project
* composer require cakephp-brasil/twitter-bootstrap:dev-master
* go to config\bootstrap.php and add Plugin::load('TwitterBootstrap'); at the end os the file
* go to src\view\appview.php and add $this->LoadHelper('Form', ['className'=>'TwitterBootstrap.Form']); on the initialize method
* go to src\controller\appcontroller.php and add $this->viewBuilder()->theme('TwitterBootstrap');  on the initialize method
* go to src\controller\appcontroller.php and add $this->viewBuilder()->layout('adminlte'); on the initialize method

---
fifth thing to do 
---

* ativate the layout
* run this on console bin\cake TwitterBootstrap.publish all
* now we have the layout files at src\template\element

___
sixth thing to do
---

* initiate the migrations database
* run bin\cake bake migration TableName to create your tables  
* go to config\migrations and you will be able to personalize your tables following the rules of Migration's Development

---
seventh thing to do
---

* generate the files of your migration tables
* run bin\cake migrations migrate
* NOW YOU HAVE YOUR DATABASE COMPLETE

---
eighth thing to do 
---

* now you can run the bake to create your CRUD using bin\cake bake all NOMETATABELA or do it yourself
* OBS to create your CRUD using the twitterbootstrap you must run bin\cake bake all NOMETATABELA --theme TwitterBootstrap

---
ninth thing to do
---

* run the follow code bin\cake i18n extract
* the cake will catch every sentence into a __() 
* go to src\LOCALE and create a directory that will keep the new language ex.: pt_BR
* copy the file default.pot and put it on the directory created previously like dafault.po without the last T of .pot
* you can edit whatever you want to translate puttin it into a __('stringHere)
* to set this on your system 
* go to config\app.php
* on App=>defaultLocale you must edit the filed ex.: pt_BR and put the name of your language

---
tenth thing to do
---

* to use data from the auth on the views

No AppController    >>  $this->set('Auth', $this->Auth);
Na View             >>  <?= $Auth->user('name') ?>







