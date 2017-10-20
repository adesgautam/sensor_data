# sensor_data
Using php and python this is an implementation to store sensor data(sent using POST request) on server.

The `server` folder contains php files to be used on the server. They are listed below:
1. The **connect.php** file is used to connect to Mysql database. The Mysql database credentials are to be used in it.

2. The **add.php** file is reponsible to get the data sent through POST request to the server and store it in Mysql database. A sample POST request could be sent as follows using curl: 

  `curl -X POST -H "Content-Type: application/json" -d '{ "var1": "12.56", "var2": "54.22" }' server-address/add.php` . 

  Here `var1 ` and `var2` are the variables used as reference to send and get data. `var1` and `var2` also needs to be used in       **add.php**.

OR the **client.py** python script can be used(requires python 3).

3. The **index.php** holds the code for displaying the data. It can be customized as per the requirements.
