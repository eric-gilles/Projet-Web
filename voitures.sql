-- Création de la base si elle n'existe pas
CREATE DATABASE IF NOT EXISTS `projetweb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `projetweb`;

-- supprime les tables existantes

drop table IF EXISTS `Voitures`;
drop table IF EXISTS `Marques`;


-- on crée les tables et leurs contraintes 

CREATE TABLE IF NOT EXISTS `Marques`(
       id_marque INT NOT NULL AUTO_INCREMENT,
       marque VARCHAR(16) NOT NULL,
       constraint pk_marques primary key(id_marque)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE IF NOT EXISTS `Voitures`(
       id INT NOT NULL AUTO_INCREMENT,
       immatriculation VARCHAR(9) NOT NULL,
       id_marque int NOT NULL,
       modele VARCHAR(16) NOT NULL,
       couleur VARCHAR(16) NOT NULL,
       kilometrage INT NOT NULL,
       prix FLOAT NOT NULL,
       poids FLOAT NOT NULL,
       reservoir INT NOT NULL,
       annee INT NOT NULL,
       nombrePortes INT NOT NULL,
       description1 VARCHAR(64) NOT NULL,
       description2 VARCHAR(64) NOT NULL,
       description3 VARCHAR(64) NOT NULL,
       constraint pk_voitures primary key(id)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ajout contraite
ALTER table voitures
ADD CONSTRAINT fk_voitures foreign key (id_marque) REFERENCES Marques(id_marque);

-- on insère des données
insert into Voitures values(1,'FZ-208-DG', 1,'Xantia','Rouge',177500,1290,1361,65,2002,5,
                            'Certes, elle n''est plus produite depuis déjà un bon nombre d''années. Mais la qualité de sa conception était telle qu''elle permet encore aujourd''hui de disposer d''un modèle techniquement à la page et, concrètement, encore très valable dans les prestations qu''il offre.',
                            'Carrosserie: Berline' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 6 CV' ||
                            'Puissance din: 90 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(2,'GF-056-VQ', 1,'Evasion','Gris',162000,2800,1525,80,2002,5,
                            'Il est confortable, se gare facilement grâce à sa visibilité, possède un grand coffre dans sa version 5 places.',
                            'Carrosserie: Monospace' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 9 CV' ||
                            'Puissance din: 120 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(3,'GH-363-AC', 1,'C1','Blanc',19909,8990,865,35,2015,5,
                            'Elle a pour clone la Peugeot 107 et la Toyota Aygo, avec lesquelles elle partage la totalité de la technique. La "triplette" ne se différencie que par des détails esthétiques sur la face avant ou la poupe.',
                            'Carrosserie: Citadine' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 4 CV' ||
                            'Puissance din: 72' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(4,'KB-164-HJ', 2,'Caravelle S','Rouge',7549,17200,800,38,1968,2,
                            'Un des derniers cabriolets (Caravelle 1100 S) produits à partir de juillet 1965 permettant une utilisation quasi-quotidienne pendant les beaux jours, pour un exemplaire placé au niveau 3 de l’échelle de notation des véhicules de collection.',
                            'Carrosserie: Cabriolet' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 6 CV' ||
                            'Puissance din: 44 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(5,'KF-802-MT', 2,'Clio 3','Noire',87000,5495,1017,45,2015,5,
                            'Après une deuxième génération de Clio qui a démontré tout le savoir-faire de Renault en terme de citadine polyvalente, cette troisième génération a enfoncé le clou.',
                            'Carrosserie: Berline' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 5 CV' ||
                            'Puissance din: 75 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(6,'HR-764-ZN', 2,'Kangoo 2','Blanc',51600,15490,1320,60,2015,5,
                            'La deuxième génération de Kangoo s''est passablement affranchie de ses origines utilitaires. Elle est, en effet, plus prévenante avec ses passagers, plus confortable, mieux insonorisée et équipée.',
                            'Carrosserie: Monospace' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 5 CV' ||
                            'Puissance din: 90 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(7,'HC-586-JX', 3,'806','Vert',117071,2499,1525,80,1999,5,
                            'Familiales hors normes et haut de gamme extravertis, les véhicules de type monospace ont littéralement révolutionné l''automobile. Le 806 s''est lui-même illustré comme un brillant acteur dans la genèse de cette catégorie à part.',
                            'Carrosserie: Monospace' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 9 CV' ||
                            'Puissance din: 120 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(8,'SN-119-KH', 3,'508','Noire',48633,9950,1425,72,2016,5,
                            'Qualité des matériaux, assemblages, présentation, tout respire le sérieux et rien n''a à rougir de la comparaison avec des concurrentes d''Outre-Rhin.',
                            'Carrosserie: Berline' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 6 CV' ||
                            'Puissance din: 120 ch' ||
                            'Boîte de vitesse: Automatique');
insert into Voitures values(9,'TC-078-GQ', 3,'108','Argent',15,10600,860,35,2014,3,
                            'La 108, c''est la version Peugeot de la triplette de mini-citadines que le constructeur a en commun avec Citroën (la C1) et Toyota (la Aygo).',
                            'Carrosserie: Compacte' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 4 CV' ||
                            'Puissance din: 72 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(10,'S-670-HY', 4,'Veyron Grand Sport','Blanc',16254,959406,1968,100,2009,2,
                            'Les premiers exemplaires sont sortis d''usine le 19 avril 2005. En 2008, apparaît un modèle « Grand Sport ». Chaque exemplaire porte une plaque avec son numéro de châssis.',
                            'Carrosserie: Coupé' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 119 CV' ||
                            'Puissance din: 1001 ch' ||
                            'Boîte de vitesse: Automatique');
insert into Voitures values(11,'QE-794-LK', 2,'Twingo','Violet',47538,5700,943,35,2017,3,
                            'La Twingo a été la mini-citadine star, et un best-seller de Renault pendant près de 20 ans. Elle reste encore aujourd''hui, pour sa troisième génération, la meilleure vente de son segment en France.',
                            'Carrosserie: Citadine' ||
                            'Energie: Essence' ||
                            'Puissance fiscale: 5 CV' ||
                            'Puissance din: 69 ch' ||
                            'Boîte de vitesse: Manuel');
insert into Voitures values(12,'QD-751-VK', 1,'Xsara','Argent',201626,995,1152,54,1998,5,
                            'Dotée d''un bon confort et de qualités routières presque irréprochables, elle s''offre le plus souvent à des prix sans excès.',
                            'Carrosserie: Berline' ||
                            'Energie: Diesel' ||
                            'Puissance fiscale: 6 CV' ||
                            'Puissance din: 90 ch' ||
                            'Boîte de vitesse: Manuel');

insert into Marques values(1,'Citroën');
insert into Marques values(2,'Renault');
insert into Marques values(3,'Peugeot');
insert into Marques values(4,'Bugatti');