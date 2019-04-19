<?php

/*
 * Crea el script 9_2a.php e imprime como cadena las siguientes sentencias, separadas por un salto de línea. 
 * Las sentencias se ejecutarán directamente desde phpMyAdmin. Una vez lanzadas se incluirán en el script PHP en modo cadena, solo para su corrección. 
 */

//a) Realiza una consulta que devuelva los 5 países europeos con mayor población, ordenados de mayor a menor población. 
print("SELECT * FROM country WHERE continent LIKE 'Europe' ORDER BY Population DESC LIMIT 5; ");
print ("</br>");

//b) Realiza una consulta que devuelva todas las regiones disponibles en la tabla country, sin repetir y por orden alfabético.
print("SELECT DISTINCT region AS Region FROM country ORDER BY Region ASC;");
print ("</br>");

//c) Realiza una consulta que inserte un nuevo país ficticio llamado Polifemo (código PFM). Puedes inventar el resto de valores. 
print ("INSERT INTO `adrisanc_php`.`country`
(`Code`,`Name`,`Continent`,`Region`,`SurfaceArea`,`IndepYear`,`Population`,`LifeExpectancy`,`GNP`,`GNPOld`,`LocalName`,`GovernmentForm`,`HeadOfState`,`Capital`,`Code2`)
VALUES
('PFM','Polifemo','Asia','Middle East', 200.00,2019,5,49.1,200,12,'MiCasa','Republic','Adri', NULL, 'PF');
");
print ("</br>");

//d) Realiza una consulta que inserte una nueva ciudad llamada Pandora, perteneciente a Polifemo.
print("INSERT INTO `adrisanc_php`.`city`
(`Name`,`CountryCode`,`District`,`Population`)
VALUES
('Pandora','PFM','Barcelona',200);");
print ("</br>");

//e) Realiza una consulta que actualice la población de España a 46.524.943 hab.
print("UPDATE `adrisanc_php`.`country` SET `Population` = '46524943' WHERE (`Code` = 'ESP');");
print ("</br>");

//f) Realiza una consulta que elimine las ciudades españolas de menos de 100.000 habitantes. 
print("DELETE FROM city WHERE CountryCode LIKE 'ESP' AND Population <100000;");