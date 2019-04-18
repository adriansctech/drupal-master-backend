<?php

/*
	Crea el script /8_4a.php. Siguiendo el ejemplo del apartado 8.4:
    - Crea todas las clases del ejemplo. 
 */

abstract class Motor {
	abstract public function encender();
	abstract public function acelerar();
	abstract public function apagar();	
}

class MotorDiesel extends Motor {
	public function __construc() {
		print ("Nuevo motor Diesel </br>");		
	}

	public function encender() {
		print ("Enciende el motor </br>");
	}

	public function acelerar() {
		print ("Acelera el motor </br>");
	}

	public function apagar() {
		print ("Apaga el motor </br>");
	}
}

class MotorElectrico {

	private $conectado;

	public function __construc() {
		print ("Nuevo motor electrico </br>");
		$this->conectado = FALSE;
	}

	public function conectar() {
		print ("Conecta el motor electrico </br>");
		$this->conectado = TRUE;
	}

	public function activar() {
		if (!$this->conectado) {
			print ("El motor no está conectado </br>");
		}else{
			print ("Activa el motor </br>");
		}
	}

	public function moverMasRapido() {
		if (!$this->conectado) {
			print ("EL motor no está conectado </br>");
		}else {
			print ("Mueve más rápido </br>");
		}
	}

	public function detener() {
		if(!$this->conectado) {
			print("El motor no está conectado </br>");
		}else {
			print ("Detiene el motor eléctrico </br>");
		}
	}

	public function desconectar() {
		print ("Desconecta motor electrico </br>");
		$this->conectado = FALSE;
	}
}

class motorElectricoAdapter extends Motor {
	private $motorElectrico;

	public function __construct() {
		$this->motorElectrico = new MotorElectrico();
		print ("Creando adaptador para motor eléctrico </br>");
	}

	public function encender() {
		$this->motorElectrico->conectar();
		$this->motorElectrico->activar();
	}

	public function acelerar() {
		$this->motorElectrico->moverMasRapido();
	}

	public function apagar() {
		$this->motorElectrico->detener();
		$this->motorElectrico->desconectar();
	}
}
/*
$motorDiesel = new MotorDiesel();
$motorDiesel->encender();
$motorDiesel->acelerar();
$motorDiesel->apagar();
*/
/*
$motorElectrico = new motorElectricoAdapter();
$motorElectrico->encender();
$motorElectrico->acelerar();
$motorElectrico->apagar();
*/

/*Crea la clase MotorHibrido con las propiedades: 
    $motor_activo
    $nivel_bateria
*/

class MotorHibrido {

	private $motor_activo ;
	private $nivel_bateria;

	//y los siguientes métodos (imprime un mensaje en cada método para poder visualizar las acciones que se están realizando): 

	public function __construc() {
		//constructor. Imprime el mensaje "Nuevo motor híbrido". Durante la creación, asigna a la propiedad $motor_activo, el valor "batería". El nivel de batería inicial será del 80%. 
		print ("Nuevo motor hibrido </br>");
		$this->motor_activo = 'bateria';
		$this->nivel_bateria = 80;
	}

	public function usarBateria() {
		//usarBateria(). Cambia el $motor_activo a batería.
		$this->motor_activo = 'bateria';
		print ("Se ha cambiado el motor a batería </br>");
	}

	public function usarGasolina() {
		//usarGasolina(). Cambia el $motor_activo a gasolina. 
		$this->motor_activo = 'gasolina';
		print ("Se ha cambiado el motor a gasolina </br>");
	}

	public function encenderbateria () {
		//encenderBateria(). Enciende el motor cuando está en modo batería. 
		if ($this->motor_activo == 'bateria') {
			print ("El motor (batería) está encendido </br>");
		}
	}

	public function encenderGasolina () {
		//encenderGasolina(). Enciende el motor cuando está en modo gasolina. 
		if ($this->motor_activo == 'gasolina') {
			print ('El motor (gasolina) está encendido </br>');
		}
	}

	public function acelerarBateria () {
		//acelerarBateria(). Acelera el motor cuando está en modo batería. Consume un 10% de la batería. Cuando la batería 
		//llegue al 10%, se pasará a Gasolina.
		if ($this->motor_activo == 'gasolina') {
			$this->nivel_bateria += 10;
			print ("El motor de gasolina ha acelerado (+10 de batería) </br>");
		}
		if ($this->nivel_bateria < 11) {
			encenderGasolina();
			print ("El motor de gasolina se ha encendido (nivel de bateria < 11) </br>");
		}
	}

	public function acelerarGasolina () {
		//acelerarGasolina(). Acelera el motor cuando está en modo gasolina. Acumula un 10% de la batería.
		if ($this->motor_Activo == 'gasolina') {
			$this->nivel_bateria += 10;
			print ("El motor de gasolina ha acelerado (+10 de nive_batería) </br>");
		}
	}

	public function detenerBateria () {
		//detenerBateria(). Apaga el motor cuando está en modo batería. 
		if ($this->motor_activo == 'bateria') {
			print ("El motor de batería se ha apagado </br>");	
		}		
	}

	public function detenerGasolina () {
		//detenerGasolina(). Apaga el motor cuando está en modo gasolina.
		if ($this->motor_activo == 'gasolina') {
			print ("EL motor de gasolina se ha apagado </br>");
		}
	}
}

/*
	Crea el adaptador MotorHibridoAdapter para que encaje en la estructura de clases anterior. 
 */


class MotorHibridoAdapter extends Motor {

	private $motor;

	public function __construct (){
		$this->motor = new MotorHibrido();
		print ("Creando el adapter para el nuevo motor híbrido </br>");
		$this->motor->usarBateria();
	}

	public function encender() {
		
	}

	public function acelerar() {}
	public function apagar() {}
}

/* 
	Para probar el funcionamiento, crea los objetos $motorDiesel, $motorElectrico y $motorHibrido. 
*/

$motorDiesel = new MotorHibridoAdapter();
$motorDiesel->encender();