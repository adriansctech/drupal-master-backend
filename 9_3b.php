<?php

/*
 * - Realiza una sentencia con el JOIN adecuado que devuelva el listado de empleados 
 * (código de empleado) que hayan sido directores de departamento y que no hayan sido 
 * despedidos antes del año 1990 (inclusive). 
 */

print("SELECT dept_manager.emp_no FROM dept_manager
LEFT JOIN employees
ON dept_manager.emp_no = employees.emp_no
WHERE dept_manager.emp_no NOT IN (SELECT emp_no FROM emp_fired WHERE date < '1989-12-31');");
