

------------------------------------------
--On supprime les tables existantes
------------------------------------------
drop table Voitures;

------------------------------------------
--On crée les tables et leurs contraintes 
------------------------------------------
CREATE TABLE Voitures(
	id INT NOT NULL AUTO_INCREMENT,
	immatriculation VARCHAR NOT NULL,
	marque VARCHAR NOT NULL,
	modele VARCHAR NOT NULL,
	couleur VARCHAR NOT NULL,
	kilometrage INT NOT NULL,
	prix FLOAT NOT NULL,
	description1 VARCHAR NOT NULL,
	description2 VARCHAR NOT NULL,
	constraint pk_voitures primary key(id),
	constraint fk_voitures foreign key(marque) REFERENCES Marques(marque)
);

CREATE TABLE Marques(
	id INT NOT NULL AUTO_INCREMENT,
	marque VARCHAR NOT NULL,
	constraint pk_marques primary key(id),
);

------------------------------------------
--On insère des données
------------------------------------------
insert into Voitures values(1,);
insert into Voitures values(2,);
insert into Voitures values(3,);
insert into Voitures values(4,);
insert into Voitures values(5,);
insert into Voitures values(6,);
insert into Voitures values(7,);
insert into Voitures values(8,);
insert into Voitures values(9,);
insert into Voitures values(10,);
insert into Voitures values(11,);
insert into Voitures values(12,);

insert into Marques values(1,);
insert into Marques values(1,);
insert into Marques values(1,);
insert into Marques values(1,);