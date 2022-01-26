# versetzungsrechner
Systemvorraussetzungen: 
 - Webserver + PHP 7/8 
 - MariaDB/MySQL Datenbank
 
Die Dateien müssen unter dem Webserververzeichnis abgelegt werden. \
Danach müssen auf dem Datenbankserver folgende Befehle ausgeführt werden: \
\
 CREATE USER admin@localhost IDENTIFIED BY 'peterpeter'; \
 CREATE DATABASE versetzungsrechner; \
 GRANT ALL PRIVILEGES ON versetzungsrechner . * TO admin@localhost; \
 FLUSH PRIVILEGES; \
 USE versetzungsrechner; \
 \
 CREATE TABLE test ( \
	id int NOT NULL AUTO_INCREMENT, \
	durchschnitt varchar(50), \
	bestanden varchar(50), \
	name varchar(50), \
	klasse varchar(50), \
	primary key (id));
