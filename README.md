# Convertial LTD Candidate Test

Good day candidate!

The following exercises were created to test basic knowledge in PHP/MYSQL/HTML/CSS/JS.
No knowledge in either Windows or Linux operating systems is required, but you should use sFTP to upload your files.

At all times help is available and won't be held against you should you make use of it. Email for help is in your private
details bundle.

1.	Make sure you can sFTP into your virtual machine using FileZilla or any other FTP program you choose to use.  
	Make sure that when you navigate to {YOUR VM IP}/ping you get a PONG response.  
	If something is not working please consult us immediately.  
	(If you're using FileZilla set the host to your VM IP and set the port to 22)
	
2. 	Make sure to read: https://github.com/giladbbn2/phpws#how-to-use-phpws-as-a-platform-for-other-projects  
	The most important part is titled "How to use phpws as a platform for other projects".  
	You already have a file at /var/www/html/includes/MainControllerV1.php in your vm.  
	Make sure that when you navigate to {YOUR VM IP}/ws/1/main/get_users you can see a list of users - currently only
	one is listed with user_id = "a123".  
	If something is not working please consult us immediately.
	
3.	Add another public method to MainControllerV1 called "insert_user" that receives the following parameters:

	user_id, firstname, lastname, phone
	
	The method should insert a new user to the mysql db. The "inserted" field should be set to current time.  
	If the user already exists (user_id already exists) this method should return an error describing it.  
	Make sure to clean the parameters to prevent sql injections.
	
4.	Add another public method to MainControllerV1 called "edit_user" that receives the following parameters:

	user_id, firstname, lastname, phone
	
	The method should edit a user that already exists (only if user_id exists).  
	The fields "inserted" and "user_id" cannot be changed for a user.  
	Make sure to clean the parameters to prevent sql injections.
	
5.	Add another public method to MainControllerV1 called "users" that shows a nice html table listing all users. You are encouraged to use jQuery and Bootstrap. A simple design will suffice.

	Add two html buttons: "Edit User" and "Create User" and find a way to connect these buttons with the
	"insert_user" and "edit_user" controller methods you created in earlier exercises.
	You can use an html form to interact with the server controller but AJAX is encouraged.

6. 	Design a Login mechanism in which an admin can connect to the system and access the following controller methods:
	
	get_users  
	insert_user  
	edit_user  
	users
	
	For that you'll probably need to create another public method that tests if an admin is currently connected
	to the system (check http cookies) and if not then show a login page.  
	The admin is not a user listed in the candidate.users mysql table. It's credentials for login should be:
	
	username: admin  
	password: 123456
	
	The login mechanism should make use of cookies and the mysql table candidate.open_sessions which was already
	created as a mysql table for you. This table contains ONLY open sessions. Once the admin logs into the system
	a row should be inserted into this table with its IP. Once the admin logs out the row should be deleted.
	
	Only a logged in admin may access the four method listed above.
	
