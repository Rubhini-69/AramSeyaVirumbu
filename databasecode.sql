CREATE TABLE details(userName varchar(50) NOT NULL, userContact int(50) NOT NULL, neAge int(11) NOT NULL, neCategory varchar(50) NOT NULL, neNum int(11) NOT NULL, neNeed varchar(50) NOT NULL, neAddress varchar(256) NOT NULL, neLocation varchar(50) NOT NULL);

INSERT INTO details (userName, userContact, neAge, neCategory, neNum, neNeed, neAddress, neLocation) VALUES ('Rubhini', 9360447081, 5, 'Children', 2, 'Orphanage', 'Thudiyalur', 'Thudiyalur');

CREATE TABLE OrgDetails(email varchar(256) NOT NULL, Need varchar(50) NOT NULL, PlaceLocation varchar(50) NOT NULL);
