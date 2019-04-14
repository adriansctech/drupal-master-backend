<?php

interface Codify {
	public function encode($data);
	public function decode($data);
}

class Serialize implements Codify {
	public function encode($data) {
		return serialize($data);
	}
	public function decode($data) {
		return unserialize($data);
	}
}

class Json implements Codify {
	public function encode($data){
		return json_encode($data);
	}
	public function decode($data) {
		return json_decode($data);
	}
}

$data = ['apples' => ['red' => 5, 'green' => 23], 'oranges' => 12, 'pears' => 'Not available'];

$serialiObject = new serialize();
$valueSerialized = $serialiObject->encode($data);
$valueUnserialized = $serialiObject->decode($valueSerialized);
print($valueSerialized . "</br>");
print_r($valueUnserialized);
print("</br>");

$jsonObject = new Json();
$valueJsonCodify = $jsonObject->encode($data);
$valueJsonDeCodify = $jsonObject->decode($valueJsonCodify);
print($valueJsonCodify . "</br>");
print_r($valueJsonDeCodify);

