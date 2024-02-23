
//CREATE FUSION PRO CONTAINER DATABASE FOR ALL SOFTWARE(JOOMLA, WORDPRESS, DRUPAL)
create database fusionpro;
create user 'fusionadmin'@'localhost' identified by 'test123456';
grant all on fusionpro.* to 'fusionadmin'@'localhost';
use fusionpro;

//CREATE BASE CONFIGURATION TABLES FOR MENU SYSTEMS INSIDE FUSIONPRO
create table fusionadministrators(id int not null, loginname char(50), firstname char(50), lastname char(50), adminpassword char(50));
create table instances (id int, custid char(100), licenseid char(100), fullbaseurl char(175), baseext char(175));
create table headermenu(id int, hurl1 char(175), hurl2 char(175), hurl3 char(175), hurl4 char(175), hurl5 char(175), hurl6 char(175), hurl7 char(175), hurl8 char(175), hurl9 char(175), hurl10 char(175), hurl11 char(175), hurl12 char(175), hurl13 char(175), hurl14 char(175), hlabel1 char(50), hlabel2 char(50), hlabel3 char(50), hlabel4 char(50), hlabel5 char(50), hlabel6 char(50), hlabel7 char(50), hlabel8 char(50), hlabel9 char(50), hlabel10 char(50), hlabel11 char(50), hlable12 char(50), hlabel13 char(50), hlabel14 char(50));
create table lowermenu (id int, lmurl1 char(175), lmurl2 char(175), lmurl3 char(175), lmurl4 char(175), lmurl5 char(175), lmurl6 char(175), lmurl7 char(175), lmurl8 char(175), lmurl9 char(175), lmurl10 char(175), lmurl11 char(175), lmurl12 char(175), lmurl13 char(175), lmurl14 char(175), lmlabel1 char(50), lmlabel2 char(50), lmlabel3 char(50), lmlabel4 char(50), lmlabel5 char(50), lmlabel6 char(50), lmlabel7 char(50), lmlabel8 char(50), lmlabel9 char(50), lmlabel10 char(50), lmlabel11 char(50), lmlable12 char(50), lmlabel13 char(50), lmlabel14 char(50));
create table jquerymenu (id int, jquery1url char(175), jquery2url char(175), jquery3url char(175), jquery4url char(175), jquery5url char(175), jqlabel1 char(50), jqlabel2 char(50), jqlabel3 char(50), jqlabel4 char(50), jqlabel5 char(50));
create table inventoryfprobase (id int, soft1 char(50), soft2 char(50), soft3 char(50), soft4 char(50), soft5 char(50), soft6 char(50), path1 char(175), path2 char(175), path3 char(175), path4 char(175), path5 char(175), path6 char(175));

//INSERT VALUES
insert into inventoryfprobase VALUES (1, 'wpress1', 'wpress2', 'wpress3', 'media wiki', 'joomla 3.91', 'drupal8', '/w', '/w2', '/w3', '/wiki', '/h', '/cms');
insert into instances VALUES (1,'capus1','License1234','https://www.acme.com', 'fusionpro');
insert into headermenu VALUES (1, '1','2','3','4','5','6','7','8','9','10','11','12','13','14','1','2','3','4','5','6','7','8','9','10','11','12','13','14');
insert into lowermenu VALUES (1, '1','2','3','4','5','6','7','8','9','10','11','12','13','14','1','2','3','4','5','6','7','8','9','10','11','12','13','14');
insert into jquerymenu VALUES (1, '1','2','3','4','5','1','2','3','4','5');
insert into fusionadministrators VALUES('1', 'jssg33', 'John', 'Stritzinger', 'test1234');
insert into fusionadministrators VALUES('2', 'jws', 'James W.', 'Stritzinger', 'test1234');
insert into fusionadministrators VALUES('3', 'hms', 'Hannah M', 'Stritzinger', 'test1234');
insert into fusionadministrators VALUES('4', 'lls', 'Lucy L.', 'Stritzinger', 'test1234');