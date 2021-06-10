PHP - MySQL application


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

MariaDB [test]> describe LIVETABLE;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| ID       | int(5)       | NO   | PRI | NULL    | auto_increment |
| TASKNAME | varchar(100) | YES  |     | NULL    |                |
| DETAILS  | varchar(100) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)
