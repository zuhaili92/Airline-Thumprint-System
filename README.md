
##Airline Thumbprint System
- - - -

The application was initially created by **Zuhaili**, useing [php](http:php.net), [mysql](https://www.mysql.com) and [bootstrap](http://getbootstrap.com).


Airline Thumbprint System is a web based application system, that will allow you to keep tracking passenger checkin and checkout. This system can manage passengers ticketing. The normal
ticketing replace with thumbprint ticketing where passengers does not have to carry their ticket. When passengers buy the ticket their thumbprint will be request from immigration
office. So, they just have to scan their thumbprint at the departure. Passengers also given a series of code to refer in case if the thumbprint system not recognize their thumb at departure.

****

If you find any bug, and a fix for that bug, please leave a comment on the github page for this project and i will push the change into the master branch.


### Installing this application is fairly easy, just follow these steps:
****


1. Download the latest version with git (`git clone https://github.com/siamon123/warehouse-inventory-system.git`)

2. Import/load flightv2.sql into your mysql database. This should set up the basic structure of the database system.

3. Modify the config.php and change the variables to match your host, database, username and passwords.

4. Then loging by typing **username** and **password**:


   Immigration User    					 | Staff User                      | Passenger User
   --------------------------------------| --------------------------------| -------------------
   **Username** : immigration@flight.com | **Username** : staff@flight.com | **Username** : passenger@flight.com
   **Password** : 12345678 				 | **Password** : 12345678 		   | **Password** : 12345678

