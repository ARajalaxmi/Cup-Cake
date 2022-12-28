CRUD OPERATION ON CAKE PHP
1 . INDEX PAGE

![cc1](https://user-images.githubusercontent.com/105000933/209858006-77eb2ae5-a621-4bd9-9f48-9051cfbdb752.jpg)

In this page we List the all user records and manage the records

2 . SEARCH FUNCTIONALITY

![cc2](https://user-images.githubusercontent.com/105000933/209858532-14348cd0-6625-4a8b-9953-a0c6fcd94094.jpg)

Using this search option we search a records by search user name

3. ADD USER

![cc4](https://user-images.githubusercontent.com/105000933/209859212-ae56c18d-6652-4875-9937-e2bebfacbd10.jpg)

After submit

![cc3](https://user-images.githubusercontent.com/105000933/209859301-1367b4fa-c540-448b-b22e-3d927f3f42e6.jpg)

In this page we add a user and save the records in database

4 . Read Records via List

![cc5](https://user-images.githubusercontent.com/105000933/209859572-038d8cc5-1e9d-4b01-b0e3-e180330df598.jpg)

In this List page we View a single user's record

5 . Update Records

![cc6](https://user-images.githubusercontent.com/105000933/209859845-2339dc11-4573-4c32-b3aa-82b95d68644d.jpg)

In this edit page we edit records and update it.

6 . Delete Records

![cc7](https://user-images.githubusercontent.com/105000933/209860094-79a4c6ce-9d06-442c-bd97-9739fe07264e.jpg)

If we want to delete and user from out list then use delete 

How To Run Local


PHP VERSION <= 7.4
CAKE PHP Version 4.0

check you php version in cmd using "php -v"

Step 1 :Create Project

Run this command into your shell or terminal. Make sure composer should be installed in your system.
"composer create-project --prefer-dist cakephp/app:~4.0 CUPCAKE"

Step 2 : Database Connection & Configuration

	i) Create database in your local PhpMyAdmin 
	And import the following sql file in created database
	ii) Config\app_local.php
	update below details
	'username' => 'your username',
	'password' => 'your password',
	'database' => 'your database', 

Step 3 : RUN in Local 
	Unzip the folder and extract it,
	
	Go to cupcake\bin\cake server or your_project\bin\cake server
	
	paste it your browser 
