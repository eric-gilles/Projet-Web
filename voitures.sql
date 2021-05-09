

------------------------------------------
--On supprime les tables existantes
------------------------------------------
drop table Voitures;
drop table Marques;

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
	poids FLOAT NOT NULL,
	reservoir INT NOT NULL,
	annee INT NOT NULL,
	nombrePortes INT NOT NULL,
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
insert into Voitures values(1,'FZ-208-DG','Citroën','Xantia','Rouge',177500,1290,1361,65,2002,5,
                            'Certes, elle n''est plus produite depuis déjà un bon nombre d''année. Mais la qualité de sa conception était telle qu''elle permet encore aujourd''hui de disposer d''un modèle techniquement à la page et, concrètement, encore très valable dans les prestations qu''il offre.',
                            'Carrosserie: Berline' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 6 CV' ||
                            'Puissance din: 90 ch' ||
                            'Boîte de vitesse: Mécanique');
insert into Voitures values(2,'GF-056-VQ','Citroën','Evasion','Gris',162000,2800,,);
insert into Voitures values(3,'GH-363-AC','Citroën','C1','Blanc',19909,8990,,);
insert into Voitures values(4,'KB-164-HJ','Renault','Caravelle S','Rouge',7549,17200,,);
insert into Voitures values(5,'KF-802-MT','Renault','Clio 3','Noire',87000,5495,,);
insert into Voitures values(6,'HR-764-ZN','Renault','Kangoo 2','Blanc',51600,15490,,);
insert into Voitures values(7,'HC-586-JX','Peugeot','806','Vert',117071,2499,,);
insert into Voitures values(8,'SN-119-KH','Peugeot','508','Noire',48633,9950,,);
insert into Voitures values(9,'TC-078-GQ','Peugeot','108','Argent',15,10600,,);
insert into Voitures values(10,'S-670-HY','Bugatti','Veyron Grand Sport','Blanc',16254,959406,,);
insert into Voitures values(11,'QE-794-LK','Bugatti','Type 35','Bleu',38476,37500,,);
insert into Voitures values(12,'QD-751-VK','Bugatti','Type 46','Blanc',45252,730477,,);

insert into Marques values(1,'Citroën');
insert into Marques values(2,'Renault');
insert into Marques values(3,'Peugeot');
insert into Marques values(4,'Bugatti');