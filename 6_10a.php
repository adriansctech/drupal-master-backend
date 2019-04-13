<?php

$cadena = "1, 4, 7, 15, 222, 45, 68, 342";

print preg_replace_callback("/[0-9]{1,}/", function ($coincidencia) { 
	if ($coincidencia % 2 == 0) {

		return $coincidencia * 2;

	}else {		
		return number_format(rand(1000, 10000),'0', ',','.');
	}
	
}, $cadena);