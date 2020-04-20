# Broker_Insight_Code_Challenge
This project was developed using a local server XAMPP.

# Installing Xampp local server
1. Navigate to https://www.apachefriends.org/index.html.
2. Install the latest window version.
3. Execute the installer and keep a record of details and where you have installed to.

# Starting Xampp
1. Navigate to the Xampp directory which you should have a note of (default: C:\xampp).
2. Execute `xampp-control.exe`.
3. When window starts up you should see a list of modules Apache, MySQL, FileZilla, etc (we will only be using Apache and MySQL).
4. Click the start actions for the module "Apache" and "MySQL".

# Adding database
1. Use a browser on your computer (I'm using google chrome).
2. In the browser type the url `http://localhost/phpmyadmin` (this will take you the phpmyadmin application on the xampp server, this will hangle the database).
3. Import the customer and policy database that can be found this repo. If this does not work copy the sql script `Broker_Insights_Database_seed.sql` and fire the script using the phpmyadmin `SQL` feature, this should create the tables and data for the database.

# Adding Vuejs webpage and PHP api
1. Navigate to the xampp directory and locate directory `htdocs`.
2. Delete all the files that are currently in there and paste in files `Database.php`, `Policy.php`, `PolicyController.php`, `index.html`, `app.js`, and `styles.css` that can be found in this repo.

# Using the webiste
1. Start up your broswer and enter the url `http://localhost`.
2. This should take you to a simple webpage with the title "Policys" and a "Fetch Policys" button.
3. Click on the button and you should get the policys in the database.
