<?php

define("db_host", "localhost");
define("db_uid", "admin");
define("db_pwd", "admin");
define("db_name", "cs2102project");

$db = new mysqli(db_host, db_uid, db_pwd, db_name);
if ($db->connect_errno) // are we connected properly?
exit("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);

$db->query('CREATE TABLE flight ( id INTEGER PRIMARY KEY, 
	departure	VARCHAR(64)	NOT NULL,
	arrival	VARCHAR(64)	NOT NULL,
	airline	VARCHAR(64)	NOT NULL,
	departure_date	DATE	NOT NULL,
	arrival_date	DATE	NOT NULL,
	passenger_limit	INTEGER	NOT NULL,
	status	VARCHAR(64)	NOT NULL,
	status_changed_by	VARCHAR(64)	REFERENCES ADMIN(id),
	class	VARCHAR(64),
	price	INTEGER	NOT NULL);');

$db->query('CREATE TABLE user ( id INTEGER PRIMARY KEY, 
	email	VARCHAR(64)	NOT NULL,
	password	VARCHAR(64)	NOT NULL,
	auth_token	VARCHAR(64)	NOT NULL);');

$db->query('CREATE TABLE admin ( id INTEGER PRIMARY KEY, 
	email	VARCHAR(64)	NOT NULL,
	password	VARCHAR(64)	NOT NULL,
	auth_token	VARCHAR(64)	NOT NULL);');

$db->query('CREATE TABLE admin ( flight_id	INTEGER	REFERENCES flight(id),
	user_id	INTEGER	REFERENCES user(id));');

$db->query('CREATE TABLE passenger ( first_name	VARCHAR(64)	NOT NULL,
	last_name	VARCHAR(64),
	phone	INTEGER	NOT NULL,
	passport	VARCHAR(64)	NOT NULL,
	country	VARCHAR(64)	NOT NULL,
	diet	VARCHAR(64)	NOT NULL)');

?>