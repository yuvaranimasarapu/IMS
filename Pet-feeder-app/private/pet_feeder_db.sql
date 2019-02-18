
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS Pet;
CREATE TABLE Pet (
Pet_id INT NOT NULL PRIMARY KEY,
diet_id INT NOT NULL PRIMARY KEY,
health_entry VARCHAR (255),
type_of_pet VARCHAR (255) NOT NULL,
food_rec VARCHAR (255) NOT NULL,
age_mult VARCHAR (255) NOT NULL,
food_amount VARCHAR (255) NOT NULL,
neuter_spay  NOT NULL);

DROP TABLE IF EXISTS Historical_data ;
CREATE TABLE Historical_data (
    owner_id INT NOT NULL PRIMARY KEY,
    Pet_id INT NOT NULL,
    weight VARCHAR(45) NOT NULL,
    food_amount VARCHAR(255) NOT NULL,
    health VARCHAR(255) NOT NULL,
    Breed_id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY (owner_id)
        REFERENCES Department (dept_id),
    FOREIGN KEY (Pet_id)
        REFERENCES Pet (pet_id)
);


DROP TABLE IF EXISTS Diet ;
CREATE TABLE Diet(
diet_id INT NOT NULL,
Pet_id INT NOT NULL PRIMARY KEY,
type_diet VARCHAR(45) NOT NULL,
food_amount VARCHAR(255) NOT NULL,
health VARCHAR(255) NOT NULL,
Breed_id INT NOT NULL PRIMARY KEY,

FOREIGN KEY (Pet_id) REFERENCES Pet (Pet_id));

DROP TABLE IF EXISTS breed ;
CREATE TABLE breed (
    b_id INT NOT NULL PRIMARY KEY,
    b_name VARCHAR(255) NOT NULL,
    male_low_base INT,
    male_high_base INT NOT NULL,
    female_low_base INT,
    female_high_base INT NOT NULL
);

DROP TABLE IF EXISTS health ;
CREATE TABLE health(
health_keyword VARCHAR(45) NOT NULL,
health_mult VARCHAR(255) NOT NULL,
health_food VARCHAR(255) NOT NULL);

DROP TABLE IF EXISTS age ;
CREATE TABLE age (
    a_id INT NOT NULL,
    a_low DECIMAL NOT NULL,
    a_high DECIMAL,
    a_category VARCHAR(45) NOT NULL,
    age_multi VARCHAR(45) NOT NULL
);

insert into age
(a_id, a_low, a_high,a_category,age_multi)
VALUES 
(a_id, 0.5, 1.0, "puppy", age_multi),
(a_id, 1.1, 7.0, "adult",age_multi),
(a_id, 7.1, null, "senior", age_multi)
;

INSERT INTO breed
(b_id , b_name , male_low_base, male_high_base,female_low_base, female_high_base )
VALUES
(uuid()," ﻿Akitas",100,130, 70,100),
(uuid()," Alaskan Malamutes",85, 75),
(uuid()," American English Coonhounds",45,65, 45,65),
(uuid()," American Eskimo Dogs(toy)",6,10,6,10),
(uuid()," American Eskimo Dogs (miniature)",10,20, 10,20),
(uuid()," American Eskimo Dogs(standard)",25,35, 25,35),
(uuid()," American Foxhounds",65,70, 60,65),
(uuid()," American Hairless Terriers",12,16, 12,16),
(uuid()," American Staffordshire Terriers",55,70, 40,55),
(uuid()," Anatolian Shepherd Dogs",110,150, 80,120),
(uuid()," Australian Cattle Dogs",35,50, 35,50),
(uuid()," Australian Shepherds",50,65, 40,55),
(uuid()," Australian Terriers",12,18, 12,18),
(uuid()," Basenjis",24,24, 22,22),
(uuid()," Basset Hounds",40,65, 40,65),
(uuid()," Beagles(13 inches & under)",15,20, 20,30),
(uuid()," Beagles(13-15 inches)",20,30),
(uuid()," Bearded Collies",45,55, 45,55),
(uuid()," Beaucerons",70,110, 70,110),
(uuid()," Bedlington Terriers",17,23, 17,23),
(uuid()," Belgian Malinois",60,80, 40,60),
(uuid()," Belgian Sheepdogs",55,75, 45,60),
(uuid()," Belgian Tervuren",55,75, 45,60),
(uuid()," Bergamasco",70,84, 57,71),
(uuid()," Berger Picards",50,70, 50,70),
(uuid()," Bernese Mountain Dogs",80,115, 70,95),
(uuid()," Bichons Frises",12,18, 12,18),
(uuid()," Black and Tan Coonhounds",65,110, 65,110),
(uuid()," Black Russian Terriers",80,130, 80,130),
(uuid()," Bloodhounds",90,110, 80,100),
(uuid()," Bluetick Coonhounds",55,80, 45,65),
(uuid()," Boerboels",150,200, 150,200),
(uuid()," Border Collies",30,55, 30,55),
(uuid()," Border Terriers",13,15.5, 11.5,14),
(uuid()," Borzois",75,105, 60,85),
(uuid()," Boston Terriers",12,25, 12,25),
(uuid()," Bouviers des Flandres",70,110, 70,110),
(uuid()," Boxers",65,80, 50, 65),
(uuid()," Briards",55,100, 55,100),
(uuid()," Brittanys",30,40, 30,40),
(uuid()," Brussels Griffons",8,10, 8,10),
(uuid()," Bull Terriers",50,70, 50,70),
(uuid()," Bulldogs",50, 40),
(uuid()," Bullmastiffs",110,130, 100,120),
(uuid()," Cairn Terriers",14, 13),
(uuid()," Canaan Dogs",45,55, 35,45),
(uuid()," Cardigan Welsh Corgis",30,38, 25,34),
(uuid()," Cavalier King Charles Spaniels",13,18, 13,18),
(uuid()," Cesky Terriers",14,24, 14,24),
(uuid()," Chihuahuas",6, 6, 6, 6),
(uuid()," Chinese Crested",8,12, 8,12),
(uuid()," Chinese Shar Pei",45,60, 45,60),
(uuid()," Chinooks",55,90, 50,65),
(uuid()," Chow Chows",45,70, 45,70),
(uuid()," Cirnechi dell Etna",22,26, 17,22),
(uuid()," Collies",60,75, 50,65),
(uuid()," Coton de Tulear",9,15, 8,13),
(uuid()," Dachshunds(standard)",16,32, 16,32),
(uuid()," Dachshunds(miniature)",9,11, 9,11),
(uuid()," Dalmatians",45,70, 45,70),
(uuid()," Dandie Dinmont Terriers",18,24, 18,24),
(uuid()," Doberman Pinschers",75,100, 60,90),
(uuid()," Dogues de Bordeaux",null, 130,null, 120),
(uuid()," English Foxhounds",60,75, 60,75),
(uuid()," English Toy Spaniels",8,14, 8,14),
(uuid()," Entlebucher Mountain Dogs",55,65, 55,65),
(uuid()," Finnish Lapphunds",33,53, 33,53),
(uuid()," Finnish Spitz",25,33, 20,28),
(uuid()," Fox Terriers (Smooth)",18, 16),
(uuid()," Fox Terriers (Wire)",16,18, 14, 16),
(uuid()," French Bulldogs",22, 28, 22, 28),
(uuid()," German Pinschers",25,45, 25,45),
(uuid()," German Shepherd Dogs",65,90, 50,70),
(uuid()," Giant Schnauzers",60,85, 55,75),
(uuid()," Glen of Imaal Terriers",32,40, 32,40),
(uuid()," Great Danes",140,175, 110,140),
(uuid()," Great Pyrenees",100,130,85,100),
(uuid()," Greater Swiss Mountain Dogs",115,140, 85,110),
(uuid()," Greyhounds",65,70, 60,65),
(uuid()," Harriers",45,60, 45,60),
(uuid()," Havanese",7,13, 7,13),
(uuid()," Ibizan Hounds",50, 45),
(uuid()," Icelandic Sheepdogs",30, 25),
(uuid()," Irish Terriers",27, 25),
(uuid()," Irish Wolfhounds",120, 105),
(uuid()," Italian Greyhounds",7,14, 7,14),
(uuid()," Japanese Chin",7,11, 7,11),
(uuid()," Keeshonden",35,45, 35,45),
(uuid()," Kerry Blue Terriers",33,40, 31,38),
(uuid()," Komondorok",100, 140 ,80,120),
(uuid()," Kuvaszok",100,115, 70,90),
(uuid()," Lagotti Romagnoli",28.5,35, 24,31),
(uuid()," Lakeland Terriers",17, 16),
(uuid()," Leonbergers",110,170, 90,140),
(uuid()," Lhasa Apsos",12,18, 12,18),
(uuid()," Lowchen",15, 15),
(uuid()," Maltese ",2,7,2,7),
(uuid()," Manchester Terriers(toy)",7,12, 7,12),
(uuid()," Manchester Terriers (standard)",12,22,12,22),
(uuid()," Mastiffs",160,230, 120,170),
(uuid()," Miniature American Shepherds",20,40, 20,40),
(uuid()," Miniature Bull Terriers",18,28, 18,28),
(uuid()," Miniature Pinschers",8,10, 8,10),
(uuid()," Miniature Schnauzers",11,20, 11,20),
(uuid()," Neapolitan Mastiffs",150, 110),
(uuid()," Newfoundlands",130,150, 100,120),
(uuid()," Norfolk Terriers",11,12, 11,12),
(uuid()," Norwegian Buhunds",31,40, 26,35),
(uuid()," Norwegian Elkhounds",55, 48),
(uuid()," Norwegian Lundehunds",20,30, 20,30),
(uuid()," Norwich Terriers",12, 12),
(uuid()," Old English Sheepdogs",60,100, 60,100),
(uuid()," Otterhounds",115, 80),
(uuid()," Papillons",5,10, 5,10),
(uuid()," Parson Russell Terriers",13,17, 13,17),
(uuid()," Pekingese",10, 14,10, 14),
(uuid()," Pembroke Welsh Corgis",20, 30, 20, 28),
(uuid()," Petits Bassets Griffons Vendeens",25,40, 25,40),
(uuid()," Pharaoh Hounds",45,55, 45,55),
(uuid()," Plotts",50,60, 40,55),
(uuid()," Pointers",55,75, 45,65),
(uuid()," Pointers (German Shorthaired)",55,70, 45,60),
(uuid()," Pointers (German Wirehaired)",50,70, 50,70),
(uuid()," Polish Lowland Sheepdogs",30,50, 30,50),
(uuid()," Pomeranians",3,7, 3,7),
(uuid()," Poodles(toy)",4,6,4,6),
(uuid()," Poodles (miniature)",10,15,10,15),
(uuid()," Poodles(male standard)",60,70,40,50),
(uuid()," Portuguese Podengo Pequenos",9,13, 9,13),
(uuid()," Portuguese Water Dogs",42,60, 35,50),
(uuid()," Pugs",14,18, 14,18),
(uuid()," Pulik",25,35, 25,35),
(uuid()," Pumik",27,29, 22,24),
(uuid()," Pyrenean Shepherds",15,30, 15,30),
(uuid()," Rat Terriers",10,25, 10,25),
(uuid()," Redbone Coonhounds",45,70, 45,70),
(uuid()," Retrievers (Chesapeake Bay)",65,80, 55,70),
(uuid()," Retrievers (Curly,Coated)",60,95, 60,95),
(uuid()," Retrievers (Flat,Coated)",60,70, 60,70),
(uuid()," Retrievers (Golden)",65,75, 55,65),
(uuid()," Retrievers (Labrador)",65,80, 55,70),
(uuid()," Retrievers (Nova Scotia Duck Tolling)",35,50, 35,50),
(uuid()," Rhodesian Ridgebacks",85, 70),
(uuid()," Rottweilers",95,135, 80,100),
(uuid()," Russell Terriers",9,15, 9,15),
(uuid()," Salukis",40,65, 40,65),
(uuid()," Samoyeds",45,65, 35,50),
(uuid()," Schipperkes",10,16, 10,16),
(uuid()," Scottish Deerhounds",85,110, 75,95),
(uuid()," Scottish Terriers",19,22, 18,21),
(uuid()," Sealyham Terriers",23,24),
(uuid()," slightly less Setters (English)",65,80, 45,55),
(uuid()," Setters (Gordon)",55,80, 45,70),
(uuid()," Setters (Irish Red and White)",42,60, 35,50),
(uuid()," Setters (Irish)",70, 60),
(uuid()," Shetland Sheepdogs",15,25, 15,25),
(uuid()," Shiba Inu",23, 17),
(uuid()," Shih Tzu",9,16, 9,16),
(uuid()," Siberian Huskies",45,60, 35,50),
(uuid()," Silky Terriers",9,11, 9,11),
(uuid()," Skye Terriers",35,45, 32,40),
(uuid()," Sloughis",35,50, 35,50),
(uuid()," Soft Coated Wheaten Terriers",35,40, 30,35),
(uuid()," Spaniels (American Water)",30,45, 25,40),
(uuid()," Spaniels (Boykin)",30,40, 25,35),
(uuid()," Spaniels (Clumber)",70,85, 55,70),
(uuid()," Spaniels (English Cocker)",28,34, 26,32),
(uuid()," Spaniels (English Springer)",50, 40),
(uuid()," Spaniels (Field)",35,50, 35,50),
(uuid()," Spaniels (Irish Water)",55,68, 45,58),
(uuid()," Spaniels (Sussex)",35,45, 35,45),
(uuid()," Spaniels (Welsh Springer)",40,55, 35,50),
(uuid()," Spanish Water Dogs",40,49, 31,40),
(uuid()," Spinoni Italiani",56, 56),
(uuid()," St. Bernards",140,180, 120,140),
(uuid()," Staffordshire Bull Terriers",28,38, 24, 34),
(uuid()," Standard Schnauzers",35,50, 30,45),
(uuid()," Swedish Vallhunds",20,35, 20,35),
(uuid()," Tibetan Mastiffs",90,150, 70,120),
(uuid()," Tibetan Terriers",18,30),
(uuid()," Tibetan Spaniel",9,15, 9,15),
(uuid()," Toy Fox Terriers",3.5,7, 3.5,7),
(uuid()," Treeing Walker Coonhounds",50,70, 50,70),
(uuid()," Vizslas",55,60, 44,55),
(uuid()," Weimaraners",70,90, 55,75),
(uuid()," Welsh Terriers",20, 18),
(uuid()," West Highland White Terriers",15,20, 15,20),
(uuid()," Whippets",25,40, 25,40),
(uuid()," Wirehaired Pointing Griffons",50,70, 35, 50),
(uuid()," Wirehaired Vizslas",55,65, 45,55),
(uuid()," Xoloitzcuintli(toy)" ,10,15,10,15),
(uuid()," Xoloitzcuintli(miniature)",15,30,15,30),
(uuid()," Xoloitzcuintli(standard)",30,55, 30,55),
(uuid()," Yorkshire Terriers",null,7,null, 7);


















