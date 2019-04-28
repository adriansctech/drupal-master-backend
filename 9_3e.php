<?php

/*
 * - Realiza una sentencia que devuelva el número de ingenieras (mujeres) que se 
 *   contrataron por año, mostrando también el número de contratos. Ordena los 
 *  resultados por año de menor a mayor. 
 */

print("SELECT YEAR(employees.hire_date) AS Año, COUNT(*) AS 'Total Contrataciones', 
	(
		SELECT COUNT(*) FROM employees
		INNER JOIN titles
		ON employees.emp_no = titles.emp_no
		WHERE employees.gender = 'F'
		AND titles.title = 'Engineer'
	) AS 'Total mujeres ingenieras'
FROM employees
GROUP BY Año
ORDER BY Año ASC;");
