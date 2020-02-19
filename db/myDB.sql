https://docs.google.com/spreadsheets/d/13lzAEuFXAF7xNUkfBpS_8R6bXTxJQ4EypxlAgHUdbxo/edit#gid=0 

CREATE TABLE userType (
typeID SERIAL NOT NULL PRIMARY KEY,
code VARCHAR(3) NOT NULL,
role VARCHAR(50) NOT NULL
);
INSERT INTO userType (code,role) VALUES ('adm','admin' ),('art','artist' ),('mbr','member' );


CREATE TABLE userArfs(
userID SERIAL NOT NULL PRIMARY KEY,
typeID INT NOT NULL REFERENCES userType(typeID),
userName VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL,
displayName VARCHAR(50) NOT NULL
);
INSERT INTO userArfs (userID,typeID,userName,password,displayName) VALUES 
(2001,1,'menamorado','pass1','Marvin Enamorado' ),
(2002,2,'bdelorey','pass1','Betsey Delorey' ),
(2003,2,'jjones','pass1','Jane Jones' ),
(2004,2,'ssmith','pass1','Sam Smith' ),
(2005,3,'acoates','pass1','Angie Coates' ),
(2006,3,'ochristensen','pass1','Orion Christensen');


CREATE TABLE art(
artID SERIAL NOT NULL PRIMARY KEY,
artist INT NOT NULL REFERENCES userArfs(userID),
title VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
price NUMERIC (5, 2),
listingDT DATE,
orderDT DATE
);
INSERT INTO art (artID,artist,title,description,price,listingDT,orderDT) VALUES 
(100,2002,'cat1','siamese',10.00,'2020-01-27','2020-01-29'),
(101,2002,'cat2','starry night',20.00,'2020-01-27',NULL),
(102,2002,'cat3','patchwork',30.00,'2020-01-27',NULL),
(103,2002,'cat4','rainbow fluff',10.00,'2020-01-27',NULL),
(104,2002,'cat5','black framed',20.00,'2020-01-27',NULL),
(105,2002,'cat6','mosaic',30.00,'2020-01-27',NULL),
(106,2002,'dog1','wet dog',10.00,'2020-01-27','2020-01-29'),
(107,2002,'dog2','bathtub',20.00,'2020-01-27',NULL),
(108,2002,'dog3','shepherd',30.00,'2020-01-27',NULL),
(109,2002,'dog4','play ball',10.00,'2020-01-27',NULL),
(110,2002,'dog5','border collie',20.00,'2020-01-27',NULL),
(111,2002,'dog6','studious pug',30.00,'2020-01-27',NULL);


CREATE TABLE orderArfs(
orderID SERIAL NOT NULL PRIMARY KEY,
userID INT NOT NULL REFERENCES userArfs(userID),
artID INT NOT NULL REFERENCES art(artID),
shipDT DATE
);
INSERT INTO orderArfs (orderID,userID,artID,shipDT) VALUES (500,2005,100,'2020-01-31'),(501,2006,106,NULL);

ALTER TABLE userArfs ADD COLUMN bio text;
ALTER TABLE userArfs ADD COLUMN pic text;

UPDATE userArfs SET bio = 'Betsey Delorey grew up with many dogs as legit family members.  Her life is so much more because of the unconditional love they share for each other.  She captures that mutual love in her art.' WHERE userid = 2002;

UPDATE userArfs SET bio = 'Jane Jones first met Cleo and Caesar at the local animal rescue shelter.  It was love at first sight. Jane decided to focus her artwork on cats since creating their life and home together.  They share daily calm and contentment.' WHERE userid = 2003;

UPDATE userArfs SET bio = 'Sam Smith Dog Art grew out of his appreciation for working dogs, growing up on a sheep farm in Utah.  His family trained Jack Russell terriers to help manage their herd. His work highlights the mutually beneficial and rewarding relationships humans have with their companions.' WHERE userid = 2004;

UPDATE userArfs SET pic ='images/petpicbdelorey.jpg' WHERE userid = 2002;
UPDATE userArfs SET pic ='images/petpicjjones.jpg' WHERE userid = 2003;
UPDATE userArfs SET pic ='images/petpicssmith.jpg' WHERE userid = 2004;

UPDATE art SET title = 'cat' where artid = 100;
UPDATE art SET title = 'dog' where artid = 106;

ALTER TABLE art RENAME COLUMN description TO brief;

ALTER TABLE art ADD COLUMN thumb VARCHAR(50);
ALTER TABLE art ADD COLUMN fullsize VARCHAR(50);

UPDATE art SET artist = 2003 where artid = 100;
UPDATE art SET artist = 2003 where artid = 101;
UPDATE art SET artist = 2003 where artid = 102;
UPDATE art SET artist = 2004 where artid = 109;
UPDATE art SET artist = 2004 where artid = 110;
UPDATE art SET artist = 2004 where artid = 111;

UPDATE art SET fullsize ='images/full/cat100.jpg' WHERE artid = 100;
UPDATE art SET fullsize ='images/full/cat101.jpg' WHERE artid = 101;
UPDATE art SET fullsize ='images/full/cat102.jpg' WHERE artid = 102;
UPDATE art SET fullsize ='images/full/cat103.jpg' WHERE artid = 103;
UPDATE art SET fullsize ='images/full/cat104.jpg' WHERE artid = 104;
UPDATE art SET fullsize ='images/full/cat105.jpg' WHERE artid = 105;
UPDATE art SET fullsize ='images/full/dog106.jpg' WHERE artid = 106;
UPDATE art SET fullsize ='images/full/dog107.jpg' WHERE artid = 107;
UPDATE art SET fullsize ='images/full/dog108.jpg' WHERE artid = 108;
UPDATE art SET fullsize ='images/full/dog109.jpg' WHERE artid = 109;
UPDATE art SET fullsize ='images/full/dog110.jpg' WHERE artid = 110;
UPDATE art SET fullsize ='images/full/dog111.jpg' WHERE artid = 111;

UPDATE art SET thumb ='images/thumb/cat100.jpg' WHERE artid = 100;
UPDATE art SET thumb ='images/thumb/cat101.jpg' WHERE artid = 101;
UPDATE art SET thumb ='images/thumb/cat102.jpg' WHERE artid = 102;
UPDATE art SET thumb ='images/thumb/cat103.jpg' WHERE artid = 103;
UPDATE art SET thumb ='images/thumb/cat104.jpg' WHERE artid = 104;
UPDATE art SET thumb ='images/thumb/cat105.jpg' WHERE artid = 105;
UPDATE art SET thumb ='images/thumb/dog106.jpg' WHERE artid = 106;
UPDATE art SET thumb ='images/thumb/dog107.jpg' WHERE artid = 107;
UPDATE art SET thumb ='images/thumb/dog108.jpg' WHERE artid = 108;
UPDATE art SET thumb ='images/thumb/dog109.jpg' WHERE artid = 109;
UPDATE art SET thumb ='images/thumb/dog110.jpg' WHERE artid = 110;
UPDATE art SET thumb ='images/thumb/dog111.jpg' WHERE artid = 111;

ALTER TABLE art ADD COLUMN selected VARCHAR(1);
ALTER TABLE art ALTER COLUMN selected DROP DEFAULT;
UPDATE art SET selected = null;

07 teach:

CREATE TABLE login7t
(
	id SERIAL PRIMARY KEY NOT NULL,
	username VARCHAR(80) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL
);

INSERT INTO login7t (id, username, password) VALUES (100, 'bd_user', 'bd_pass');

ALTER TABLE userArfs RENAME COLUMN password TO userpassword;

CREATE TABLE loginArfs
(
	id SERIAL PRIMARY KEY NOT NULL,
	username VARCHAR(80) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL
);

INSERT INTO userArfs(typeID,userName,userPassword,displayName,pic,bio) 
	VALUES(2,'jsmith',123,'Jane Smith','images/jsmith.jpg','I love to draw pets.');
	
DELETE FROM userArfs WHERE userid = 7;



