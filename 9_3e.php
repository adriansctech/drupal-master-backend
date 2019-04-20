<?php

/*
 * - Realiza una sentencia que devuelva el número de ingenieras (mujeres) que se 
 *   contrataron por año, mostrando también el número de contratos. Ordena los 
 *  resultados por año de menor a mayor. 
 */

print("SELECT * FROM employees
INNER JOIN titles
ON employees.emp_no = titles.emp_no
WHERE gender LIKE 'F' AND titles.title LIKE 'Engineer';");
