CodeIgniter_Signup_Login
========================

Signup and Login Features Deployed using CodeIgnitor framework, with Strict MVC implementation and highly reusable, object oriented code.

Key Features
-------------
1. Strict <b>Model-View-Controller</b> architecture.
2. Highly Object Oriented and Reusable 
3. Built Using <b>CodeIgniter 2.1.4</b>
4. Two Tier User <b>Input Validations</b> (Client Side Validations using HTML5, Server side validations using codeIgniter)
5. Integration of <b>Twitter Bootstrap 3.0</b>
6. <b>Secure</b>. Uses encrypted sessions. Stores password as md5 hash. Cross site scripting proof. 

Usage
-------------

To use this code, follow as instructed below.

1. Download or Clone this repository. [Download Zip]
2. Open the downloaded zip file and extract it and store it in your host server root directory(like htdocs for xampp)
3. In the extracted folder, go to and open CodeIgniter -> Application -> Config -> Database.php
  and do necessary configurations for your MySQL Database
4. Now, Create a table called 'user' in MySQL Database, using following Query, Now its done !
  
CREATE TABLE `your_database`.`new_table` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phoneNumber` VARCHAR(20) NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC));

* Now, in CodeIgnitor -> Application -> Models, we have User.php which is a model representing 'user' table and all the functions related to it.
* In CodeIgnitor -> Application -> Controllers -> UserController We have All the necessary controls and form validations related to 'user' table.
* You can find views in CodeIgniter -> Application -> Views -> Web -> user : One View Represents One Function of the project.
* In case you want to tweak the user Interface, You can go to CodeIgniter -> Assets Folder to add your own CSS / Javascript. Here you can find default css and javascript of Twitter Bootstrap as well as JQuery
* All the front end includes are stored in CodeIgniter -> Application -> Views -> Web -> template

