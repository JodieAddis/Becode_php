
--Afficher toutes les données: 

SELECT * FROM students; 

--Afficher uniquement les prénoms : 

SELECT Prénom FROM students; 

--Afficher les prénoms, les dates de naissance et le sexe de chacun: 

SELECT Prénom, Anniversaire, Sexe FROM students; 

--Afficher uniquement les élèves qui sont de sexe féminin: 

SELECT * FROM students WHERE Sexe='F'; 

--Afficher uniquement les élèves qui font partie de l’école d'Addy.

SELECT * FROM students WHERE School='Addy'; 

--Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC). Ensuite, la même chose mais en limitant les résultats à 2: 

SELECT Prénom FROM students 
ORDER BY DESC;

SELECT Prénom FROM students 
ORDER BY DESC
LIMIT 2 ; 

--Ajouter Ginette Dalor, née le 01/01/1930 et affecte-la à Bruxelles, toujours en SQL :

INSERT INTO students (Nom, Prénom, Anniversaire, Sexe, School) VALUES('Dalor', 'Ginette', '93', 'F', 'Bruxelles'); 

--Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”:

UPDATE students
SET Prénom='Omer', Sexe='M'
WHERE Nom='Dalor'; 

--Supprimer la personne dont l’ID est 3 : 

DELETE FROM students WHERE id='3'; 

--Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Liege" et "2" soit remplacé par "Gent": 




