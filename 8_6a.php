<?php

/*
	Crea el script /8_6a.php. Siguiendo el ejemplo del apartado 8.6:
 */

//- Implementa las clases del ejemplo, aplicando la última solución planteada. 

class Book {
	private $title;
	private $author;
	//Última solución planteada
	private $formatter;


	public function __construct($title, $author) {
		$this->title = $title;
		$this->author = $author;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getAuthor() {
		return $this->author;	
	}

	public function getTitleAndAuthor() {
		return $this->title . " by " . $this->author . "</br>";
	}

	//Última solución planteada
	public function setFormatter(StrategyInterface $formatterType) {
		$this->formatter = $formatterType;
	}
	public function getTitleAndAuthorFormatted() {
		return $this->formatter->showTitleAndAuthor($this);
	}
}

interface StrategyInterface {
	public function showTitleAndAuthor($book);
} 

class StrategyUpper implements StrategyInterface {
	public function showTitleAndAuthor($book) {
		return strtoupper($book->getTitleAndAuthor());
	}
}
class StrategyStrong implements StrategyInterface {
	public function showTitleAndAuthor($book) {
		return "<strong>" . $book->getTitleAndAuthor() . "</strong>";
	}
}

class StrategyEm implements StrategyInterface {
	public function showTitleAndAuthor($book) {
		return "<em>" . $book->getTitleAndAuthor() . "</em>";
	}	
}

/*- Crea una clase StrategyHyphen que implemente la interfaz StrategyInterface. Esta clase
 devolverá el título y autor del libro, pero sustituyendo todos los espacios por guiones (-). 
 */
class StrategyHyphen implements StrategyInterface {
	public function showTitleAndAuthor($book) {
		return str_replace (" ", "-", $book->getTitleAndAuthor());
	}	
}

//- Para probar el funcionamiento, crea un libro y prueba todos los formatos (los del apartado)
$book = new Book("The Girl on the Train", "Paula Hawkins");
$book->setFormatter (new StrategyUpper());
print $book->getTitleAndAuthorFormatted() . "</br>";

$book->setFormatter (new StrategyStrong());
print $book->getTitleAndAuthorFormatted() . "</br>";

$book->setFormatter (new StrategyEm());
print $book->getTitleAndAuthorFormatted() . "</br>";

//- Para probar el funcionamiento, crea un libro y prueba todos los formatos (y el nuevo formato añadido).  
$book->setFormatter (new StrategyHyphen());
print $book->getTitleAndAuthorFormatted() . "</br>";

