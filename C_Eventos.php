<?php
class C_Eventos{
	
	public $nombre_evento;
	public $nombre_grupo;
	public $descripcion;
	
	public $latitud;
	public $longitud;
	public $fecha;
	
	static public $db;
	
	public function C_Eventos($nom_even="", $des="", $idgru="", $lat="", $lon="", $fec="", $nom_gru=""){
		
		$this->nombre_evento=$nom_even;
		$this->nombre_grupo=$nom_gru;
		$this->descripcion=$des;
		$this->id_grupo=$idgru;
		$this->latitud=$lat;
		$this->longitud=$lon;
		$this->fecha=$fec;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
		
	}
	
	public function AltaEventos(){
		$sql='INSERT INTO eventos (descripcion, nombre_grupo, latitud, longitud, fecha, nombre_evento) VALUES("'.$this->descripcion.'", "'.$this->nombre_grupo.'", "'.$this->latitud.'", "'.$this->longitud.'", "'.$this->fecha.'", "'.$this->nombre_evento.'")';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	public function BorraEventos(){
		$sql='DELETE FROM eventos Where nombre_evento="'.$this->nombre_evento.'"';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	
	public static function EventosPorGrupo($nombre_grupo){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$sql='SELECT nombre_evento, descripcion, nombre_grupo, latitud, longitud, fecha FROM eventos Where nombre_grupo="'.$nombre_grupo.'"';
		$arr = array();
		
		$consult=self::$db->prepare($sql);
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$evenreturn=new C_Eventos($row['nombre_evento'],$row['descripcion'], $row['nombre_grupo'], $row['latitud'], $row['longitud'], $row['fecha']);
			$arr[] = $evenreturn;
				
		}
		
		
		return $arr;
		
	}
	
	
	public static function MostrarEventos(){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
		
		$sql='SELECT nombre_evento, descripcion, nombre_grupo, latitud, longitud, fecha FROM eventos ';
		
		$consult=self::$db->prepare($sql);
		$consult=self::$db->query($sql);
			
		foreach ($consult as $row){
		
			
			$even2return=new C_Eventos($row['nombre_evento'],$row['descripcion'], $row['nombre_grupo'], $row['latitud'], $row['longitud'], $row['fecha']);
			$arr[] = $even2return;
		}
		
		
		return $arr;
		
	}
	
	public function setNombreEvento($nombre_evento){
		$this->nombre_evento=$nombre_evento;
	}
	
	public function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
	}
	
	public function setLatitud($latitud){
		$this->latitud=$latitud;
	}
	
	public function setLongitud($longitud){
		$this->longitud=$longitud;
	}
	
	public function setFecha($fecha){
		$this->fecha=$fecha;
	}
	
	public function  getNombreEvento(){
		return $this->nombre_evento;
	}
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	public function getLatitud(){
		return $this->latitud;
	}
	
	public function getLongitud(){
		return $this->longitud;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
}
?>