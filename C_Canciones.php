<?php

class C_Canciones{
	
	
	
	public $nombre;
	public $id_disco;
	public $url;
	static public $db;
	
	public function C_Canciones($nom="", $iddis="", $u=""){
		$this->nombre=$nom;
		$this->id_disco=$iddis;
		$this->url=$u;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
		
	}
	
	public function SubirCancion(){
		$sql='INSERT INTO canciones (nombre, id_disco, url) VALUES ("'.$this->nombre.'", "'.$this->id_disco.'", "'.$this->url.'")';
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	public function BorrarCancion(){
		$sql='DELETE FROM canciones Where nombre="'.$this->nombre.'"';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	public static function CancionesPorDisco($id_disco){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
		
		$sql="select nombre, id_disco, url from canciones where id_disco='".$id_disco."';";
		 
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$canreturn=new C_Canciones($row['nombre'], $row['id_disco'], $row['url']);
			$arr[] = $canreturn;
		}
		
		
		return $arr;
	
		
	}
	
	public static function VideosPorDisco($id_disco){
		

		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
		
		$sql="select nombre, id_disco, url from canciones where id_disco='".$id_disco."';";
			
		$consult=self::$db->query($sql);
			
		foreach ($consult as $row){
		
			$canreturn=new C_Canciones($row['nombre'],$row['id_disco'], $row['url']);
			$arr[] = $canreturn;
		}
		
		
		return $arr;
		
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function setIdDisco($id_disco){
		$this->id_disco=$id_disco;
	}
	
	public function setUrl($url){
		$this->url=$url;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getIdDisco(){
		return $this->id_disco;
	}
	
	public function getUrl(){
		return $this->url;
	}
	
}
?>