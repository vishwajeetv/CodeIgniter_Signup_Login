CodeIgniter_Signup_Login
========================

Signup and Login Features Deployed using CodeIgnitor framework, with Strict MVC implementation and highly reusable, object oriented code.


To use this code, follow as instructed below.

1. Download or Clone this repository. [Download Zip]
2. Open the downloaded zip file and extract it.

3. In the extracted folder, go to and open CodeIgniter -> Application -> Config -> Database.php
  and do necessary configurations for your MySQL Database

4. Now, Create a table called 'user' in MySQL Database, using following Query
  
CREATE TABLE `your_database`.`new_table` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phoneNumber` VARCHAR(20) NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC));

5. Now, in CodeIgnitor -> Application -> Models, we have User.php which is a model representing 'user' table and all the functions related to it.

6. In CodeIgnitor -> Application -> Controllers -> UserController We have All the necessary controls and form validations related to 'user' table.

7. You can find views in CodeIgniter -> Application -> Views -> Web -> user : One View Represents One Function of the project.
8. In case you want to tweak the user Interface, You can go to CodeIgniter -> Assets Folder to add your own CSS / Javascript. Here you can find default css and javascript of Twitter Bootstrap as well as JQuery
9. All the front end includes are stored in CodeIgniter -> Application -> Views -> Web -> template


Features:
1. Strict MVC architecture.
2. Highly Object Oriented and Reusable 
3. Built Using CodeIgniter 2.1.4
4. Two Tier Validations (Client Side Validations using HTML5, Server side validations using codeIgniter)
5. Integration of Twitter Bootstrap 3.0
