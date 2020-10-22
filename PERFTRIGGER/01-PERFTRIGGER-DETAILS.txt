Application Performance Trigger:

Type: R - Read
Language: PHP, JS, HTML

DataBase: MySQL
DB Name: ptdb
Tables:
PERFTRIG - Main application data table
VLANDATA - Virtual Lan data table


The application inititaly developed to run in Cloud thru a PHP boilerplate display information from a MySQL database in a table.

The table uses a JS tool allowing filters. Also, it is possible to export the information to MS-EXCEL using another JS tool for this purpose.

The best point from the application are the reports available in the "network" section: "LPAR Info" and "Server Info"

- The SQL query is done and FILLS AUTOMATICALLY a Drop-Down Menu
- Making queries using a TEXT FIELD + BUTTON;


The DB is feed from a XML file that is imported (LOADED) to the MySQL. Such XML data is automatically built in the zVM using a REXX script.

- Separated by:
Tab, Comma, Semicolon, Text delimiter: "

Command used to LOAD the data from the .XML:

MySQL [msdb]> LOAD XML INFILE '/home/rgaiotto/Desktop/perftrig_DB.xml' INTO TABLE VLANDATA CHARACTER SET utf8 ROWS IDENTIFIED BY '<SYSTEM>';




DataBase Details:

mysql -u admin -p --host sl-us-south-1-portal.25.dblayer.com --port 41969 --ssl=true --local-infile

YVVIBOUSWCGEVYSW

--------------------------------------

MySQL [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| ptdb               |
+--------------------+

--------------------------------------

MySQL [(none)]> use ptdb;

--------------------------------------

MySQL [ptdb]> show tables;
+----------------+
| Tables_in_ptdb |
+----------------+
| PERFTRIG       |
| VLANDATA       |
+----------------+

--------------------------------------


MySQL [ptdb]> describe PERFTRIG;
+---------------+-------------+------+-----+---------+----------------+
| Field         | Type        | Null | Key | Default | Extra          |
+---------------+-------------+------+-----+---------+----------------+
| ID            | int(4)      | NO   | PRI | NULL    | auto_increment |
| RDATE         | date        | NO   |     | NULL    |                |
| LPAR          | varchar(9)  | YES  |     | NULL    |                |
| ACTIVE_CP     | int(4)      | YES  |     | NULL    |                |
| ACTIVE_IFL    | int(4)      | YES  |     | NULL    |                |
| STANDBY_CP    | int(4)      | YES  |     | NULL    |                |
| STANDBY_IFL   | int(4)      | YES  |     | NULL    |                |
| LPARUTIL      | float(4,2)  | YES  |     | NULL    |                |
| MEMORY        | int(6)      | YES  |     | NULL    |                |
| MEMUTIL       | int(6)      | YES  |     | NULL    |                |
| LNX_COUNT     | int(6)      | YES  |     | NULL    |                |
| FREE_LINUX    | float(8,2)  | YES  |     | NULL    |                |
| FREE_ICO      | float(8,2)  | YES  |     | NULL    |                |
| AVAILSTOR     | float(8,2)  | YES  |     | NULL    |                |
| SANALLOC      | float(8,2)  | YES  |     | NULL    |                |
| DASD_USED     | float(8,2)  | YES  |     | NULL    |                |
| DASD_ASSIGNED | float(8,2)  | YES  |     | NULL    |                |
| LOCATION      | varchar(50) | YES  |     | NULL    |                |
| ZONE          | varchar(50) | YES  |     | NULL    |                |
| CPU           | varchar(50) | YES  |     | NULL    |                |
| MODEL         | varchar(50) | YES  |     | NULL    |                |
| CPUUTIL       | float(4,1)  | YES  |     | NULL    |                |
| CPLEVEL       | varchar(4)  | YES  |     | NULL    |                |
| HCP_SLID      | varchar(8)  | YES  |     | NULL    |                |
| SSICLUST      | varchar(8)  | YES  |     | NULL    |                |
| HIAVAPAIR     | varchar(8)  | YES  |     | NULL    |                |
| HIAVCLUST     | varchar(10) | YES  |     | NULL    |                |
| ICO           | varchar(8)  | YES  |     | NULL    |                |
| CLASS         | varchar(18) | YES  |     | NULL    |                |
| ITSS_TYPE     | varchar(18) | YES  |     | NULL    |                |
| TLS           | varchar(8)  | YES  |     | NULL    |                |
| SPECTRE       | varchar(30) | YES  |     | NULL    |                |
| SPECFLAG      | varchar(2)  | YES  |     | NULL    |                |
| STATUS        | varchar(50) | YES  |     | NULL    |                |
| COMMENTS      | varchar(50) | YES  |     | NULL    |                |
+---------------+-------------+------+-----+---------+----------------+


---------------------------------------------------------------------

MySQL [ptdb]> describe VLANDATA;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| ID         | int(11)     | NO   | PRI | NULL    | auto_increment |
| V_LPAR     | varchar(8)  | YES  |     | NULL    |                |
| V_DATE     | date        | YES  |     | NULL    |                |
| VSWITCH_ID | varchar(12) | YES  |     | NULL    |                |
| SERV_VLAN  | varchar(12) | YES  |     | NULL    |                |
| SERV_VER   | varchar(20) | YES  |     | NULL    |                |
| SUBNET     | varchar(50) | YES  |     | NULL    |                |
| VMID       | varchar(8)  | YES  |     | NULL    |                |
| HOSTNAME   | varchar(30) | YES  |     | NULL    |                |
| SERV_PROC  | int(20)     | YES  |     | NULL    |                |
| SERV_MEM   | float       | YES  |     | NULL    |                |
| SERV_DASD  | float       | YES  |     | NULL    |                |
| IP         | varchar(20) | YES  |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+




========================================================================================
========================================================================================

MIGRAÇÃO DE VOLTA PARA ON-PREM:


CONNECTOR.PHP utilizando IBM Cloud:

<?php

$host = "sl-us-south-1-portal.25.dblayer.com:41969";
$user = "admin";
$pass = "YVVIBOUSWCGEVYSW";
$database = "ptdb";

$mysqli = new mysqli($host, $user, $pass, $database);

if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>



--------------------------------------------

<?php

//END OF AUTHENTICATION CODE

error_reporting( ~E_DEPRECATED & ~E_NOTICE );

define('DBHOST', 'sl-us-south-1-portal.25.dblayer.com:41969');
define('DBUSER', 'admin');
define('DBPASS', 'YVVIBOUSWCGEVYSW');
define('DBNAME', 'ptdb');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysqli_select_db($conn, DBNAME);

if ( !$conn ) {
    die("Connection failed : " . mysqli_error());
}

if ( !$dbcon ) {
    die("Database Connection failed : " . mysqli_error());
}

$query   = "SELECT * FROM VLANDATA";
$results = mysqli_query($conn, $query);

?>


-----------------------------------------------


9.63.8.187


mysql -u root -p --host 9.63.8.187 --port 3306 --ssl=true --local-infile



$banco = "SRSBASE";
$usuario = "root";
$senha = "srsystem9823";
$hostname = "localhost";


table PERFTRIG:

create table PERFTRIG 



create table PERFTRIG (ID INT(4) AUTO_INCREMENT PRIMARY KEY,LPAR VARCHAR (9),RDATE DATE,ACTIVE_CP INT (4),ACTIVE_IFL INT (4),STANDBY_CP INT (4),STANDBY_IFL INT (4),LPARUTIL  FLOAT (4,2),MEMORY INT (6),MEMUTIL INT (6),PPAGING INT (6),PSPOOL  INT (6),LNX_COUNT INT (6),FREE_LINUX FLOAT (8,2),FREE_ICO FLOAT (8,2),DASD_USED FLOAT (8,2),DASD_ASSIGNED FLOAT (8,2),AVAILSTOR FLOAT (8,2),SANALLOC FLOAT (8,2),LOCATION VARCHAR (50),ZONE VARCHAR (50),CPU VARCHAR (50),MODEL VARCHAR (50),CPUUTIL FLOAT (4,1),CPLEVEL VARCHAR (4),HCP_SLID VARCHAR (8),SSICLUST VARCHAR (8),HIAVAPAIR VARCHAR (8),HIAVCLUST VARCHAR (10),ICO VARCHAR (8),CLASS VARCHAR (18),ITSS_TYPE VARCHAR (18),TLS VARCHAR (8),SPECTRE VARCHAR (30),SPECFLAG VARCHAR (2),COMMENTS VARCHAR (50));



VLANDATA


create table VLANDATA (ID INT(11) AUTO_INCREMENT PRIMARY KEY,V_LPAR varchar(8),V_DATE date,VSWITCH_ID varchar(12),SERV_VLAN varchar(12),SERV_VER varchar(20),SUBNET varchar(50),VMID varchar(8),HOSTNAME varchar(30),SERV_PROC int(20),SERV_MEM float,SERV_DASD float,IP varchar(20));



MariaDB [ptdb]> create table VLANDATA (ID INT(11) AUTO_INCREMENT PRIMARY KEY,V_LPAR varchar(8),V_DATE date,VSWITCH_ID varchar(12),SERV_VLAN varchar(12),SERV_VER varchar(20),SUBNET varchar(50),VMID varchar(8),HOSTNAME varchar(30),SERV_PROC int(20),SERV_MEM float,SERV_DASD float,IP varchar(20));
Query OK, 0 rows affected (0.01 sec)

MariaDB [ptdb]> describe VLANDATA;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| ID         | int(11)     | NO   | PRI | NULL    | auto_increment |
| V_LPAR     | varchar(8)  | YES  |     | NULL    |                |
| V_DATE     | date        | YES  |     | NULL    |                |
| VSWITCH_ID | varchar(12) | YES  |     | NULL    |                |
| SERV_VLAN  | varchar(12) | YES  |     | NULL    |                |
| SERV_VER   | varchar(20) | YES  |     | NULL    |                |
| SUBNET     | varchar(50) | YES  |     | NULL    |                |
| VMID       | varchar(8)  | YES  |     | NULL    |                |
| HOSTNAME   | varchar(30) | YES  |     | NULL    |                |
| SERV_PROC  | int(20)     | YES  |     | NULL    |                |
| SERV_MEM   | float       | YES  |     | NULL    |                |
| SERV_DASD  | float       | YES  |     | NULL    |                |
| IP         | varchar(20) | YES  |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+
13 rows in set (0.00 sec)

MariaDB [ptdb]>

