<?php

/*
 * Crea el script /8_5a.php. Siguiendo el ejemplo del apartado 8.5:
 */

//- Crea la clase Book tal y como está en el apartado. 
class Book {
  private $title;
  private $author;
  //- Añade una propiedad $sales (ventas) 
  public $sales = 0;
  
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
  
  //y un método addSale() que incrementará las ventas. 
  public function addSale($sales) {
    $this->sales += $sales;
  }
}

//- Crea la clase decoradora BookFormatter. Añade un método getSales() que 
//imprima el título del libro junto con el número de ventas ("título ha vendido 
//x unidades"). Si el libro ha vendido 10 o más unidades, se imprimirá en negrita. 
class BookFormater {
  protected $book;
  
  public function __construct(Book $original_book) {
    $this->book = $original_book;
  }
  
  function getSales() {
  	if ($this->book->sales < 10) {
  		return $this->book->getTitle() . " " . $this->book->sales . "</br>";	
  	}else {
  		return "<strong>" . $this->book->getTitle() . " " . $this->book->sales . "</strong></br>";	
  	}    
  }
}


//- Para probar el funcionamiento, crea una variable $book. Añade un bucle que realice 
//hasta 15 ventas. Dentro del bucle imprime el número de ventas. No olvides añadir 
//saltos de línea HTML a los mensajes. 

$book = new Book ("trilogía de la fundación", "Isaac Asimov");
$bookFormatter = new BookFormater($book);
print $bookFormatter->getSales();

for ($i=0; $i <= 15 ; $i++) { 
	//Utilizaremos el método de la clase padre addSale y luego utilizaremos el objeto Formatter para 
	//mostrar el resultado de las ventas
	$book->addSale(1);	
	print $bookFormatter->getSales();
}
$bookFormatter->getSales();