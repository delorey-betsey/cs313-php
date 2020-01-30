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




