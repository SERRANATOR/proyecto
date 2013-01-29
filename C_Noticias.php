<?php
class C_Noticias{
	
	public $id;
	public $id_grupo;
	public $descripcion;
	public $fecha;
	static public $db;
	
	public function C_Noticias($id="", $id_grupo="", $descripcion="", $fecha=""){
		$this->id=$id;
		$this->id_grupo=$id_grupo;
		$this->descripcion=$descripcion;
		$this->fecha=$fecha;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
	}
	
	public static function __getNoticia($id_grupo){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$sql="select id, id_grupo, descripcion, fecha from noticias where id_grupo='".$id_grupo."';";
		
		$consult=self::$db->prepare($sql);
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$notreturn=new C_Noticias($row['id'], $row['id_grupo'], $row['descripcion'], $row['fecha']);
		
		}
		
		
		return $notreturn;
	}
	
	public function SubeNoticia(){
		
		$sql='INSERT INTO noticias (id, id_grupo, descripcion, fecha) VALUES ("'.$this->id.'", "'.$this->id_grupo.'", "'.$this->descripcion.'", "'.$this->fecha.'");';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	public function BorraNoticia(){
		
		$sql='DELETE from noticias where id="'.$this->id.'";';
		
		$con=self::$db->prepare($sql);
		$con->execute();
		
	}
	
	
	public static function NoticiasPorGrupo($id_grupo){
		
		$sql='select id, id_grupo, descripcion, fecha from noticias where id_grupo="'.$id_grupo.'";';
		$arr = array();
		
		
		$arr = array();
		$con=self::$db->prepare($sql);
		$con->query();
		
		foreach ($con as $row){
			
			$notreturn=new C_Noticias($row['id'], $row['id_grupo'], $row['descripcion'], $row['fecha']);
			echo $row["id"];
			$arr[] = $notreturn;
			
		}
		
		return $arr;
		
	}
	
	public function setId($id){
		$this->id=$id;
	}
	
	public function setIdGrupo($id_grupo){
		$this->id_grupo=$id_grupo;
	}
	
	public function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
	}
	
	public function setFecha($fecha){
		$this->fecha=$fecha;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getIdGrupo(){
		return $this->id_grupo;
	}
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
}
?>