This is a PHP + MySQL application with the purpose to test AUTHENTICATION methods.



Database changed
MariaDB [test]> show tables;
+----------------+
| Tables_in_test |
+----------------+
| LIVETABLE      |
| TEST1          |
| TEST2          |
| auth           |
+----------------+
4 rows in set (0.00 sec)

MariaDB [test]> describe auth;
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| iduser | int(5)       | NO   | PRI | NULL    | auto_increment |
| name   | varchar(100) | NO   |     | NULL    |                |
| pass   | varchar(100) | NO   |     | NULL    |                |
| email  | varchar(100) | NO   |     | NULL    |                |
| admin  | varchar(2)   | NO   |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+
5 rows in set (0.01 sec)

MariaDB [test]>
