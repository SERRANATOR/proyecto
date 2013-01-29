<?php
class C_Estilo{
	

	public $nombre;
	public $id_grupo;
	static public $db;
	
	public function C_Estilo($nom="", $idgru=""){
		$this->nombre=$nom;
		$this->id_grupo=$idgru;
	}
	
	
	public static function GruposPorEstilo($nombre){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		 
		$arr = array();
		 
		$sql="select nombre, id_grupo from estilo where nombre='".$nombre."';";
		 
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$estreturn=new C_Estilo($row['nombre'], $row['id_grupo']);
			$arr[] = $estreturn;
				
		}
		
		
		return $arr;
	}
	
	
	public static function VerEstilos(){
		

		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
			
		$arr = array();
		
		$sql="select nombre, id_grupo from estilo ";
			
		$consult=self::$db->query($sql);
			
		foreach ($consult as $row){
		
			$est2return=new C_Estilo($row['nombre'], $row['id_grupo']);
			$arr[] = $est2return;
		}
		
		
		return $arr;
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function setIdGrupo($id_grupo){
		$this->id_grupo=$id_grupo;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getIdGrupo(){
		return $this->id_grupo;
	}
}
?>