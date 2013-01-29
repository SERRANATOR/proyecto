<?php
class C_Discos{
	
	
	public $nombre;
	public $nombre_grupo;
	public $anno;
	static public $db;
	
	public function C_Discos($nom="", $nomgru="", $ano=""){
		$this->nombre=$nom;
		$this->nombre_grupo=$nomgru;
		$this->anno=$ano;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
		
	}
	
	public function AltaDisco(){
		$sql='INSERT INTO discos (nombre, nombre_grupo, anno) VALUES ("'.$this->nombre.'", "'.$this->nombre_grupo.'", "'.$this->anno.'")';
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	public function BajaDisco(){
		$sql='DELETE FROM discos WHERE nombre="'.$this->nombre.'"';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	
	public static function DiscosPorAnno($anno){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
	
		$sql='SELECT nombre, nombre_grupo, anno FROM discos Where anno="'.$anno.'"';
		
		
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$discreturn=new C_Discos($row['nombre'], $row['nombre_grupo'], $row['anno']);
			$arr[] = $discreturn;
		}
		
		
		return $arr;
	}
	
	public static function UltimaSubida(){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
		
		$sql='SELECT nombre, nombre_grupo, anno FROM discos';
	
		$consult=self::$db->query($sql);
			
		foreach ($consult as $row){
		
			$discreturn=new C_Discos($row['nombre'], $row['nombre_grupo'], $row['anno']);
			$arr[] = $discreturn;
		}
		
		
		return $arr;
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function setNomGrupo($nombre_grupo){
		$this->nombre_grupo=$nombre_grupo;
	}
	
	public function setAnno($anno){
		$this->anno=$anno;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getNomGrupo(){
		return $this->nombre_grupo;
	}
	
	public function getAnno(){
		return $this->anno;
	}
	
}
?>