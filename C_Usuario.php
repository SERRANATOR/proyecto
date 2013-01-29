<?php

//include 'BD.php';

class C_Usuario{
	
	public $nick;
	public $pass;
	public $correo;
	public $id_grupo;
	static public $db;
	
	/**
	 * Constructor de la clase
	 * 
	 * @param string $nic
	 * @param string $pas
	 * @param string $cor
	 * @param int $id
	 */
	public function C_Usuario($nick="", $pass="", $correo="", $id_grupo=""){
		$this->nick=$nick;
		$this->pass=$pass;
		$this->correo=$correo;
		$this->id_grupo=$id_grupo;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
	}
	
	/**
	 * 
	 * @return multitype:unknown
	 */
	 public static function __getUsuario($nick){
	 	

	 	
	 	self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
	 	
	 	
	 	$sql="select nick, pass, correo, id_grupo from usuario where nick='".$nick."';";
	 	
	 	$consult=self::$db->prepare($sql);
	 	$consult=self::$db->query($sql);
	 	
	 	foreach ($consult as $row){
	 		
	 		$usureturn=new C_Usuario($row['nick'], $row['pass'], $row['correo'], $row['id_grupo']);
	 			 		
	 	}
		
	
		return $usureturn;
	}
	
	public function InsertarUsuario(){
		$sql = 'INSERT INTO usuario(nick, pass, correo, id_grupo) VALUES ("'.$this->nick.'","'.$this->pass.'","'.$this->correo.'","'.$this->id_grupo.'")';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
		
		
	}
	
	public function BorraUsuario(){
		$sql='DELETE from usuario where nick="'.$this->nick.'";';		
		
		$con=self::$db->prepare($sql);
		$con->execute();
		
	}
	
	public function ModUsuario(){
		
		$sql='UPDATE usuario SET nick="'.$this->nick.'", pass="'.$this->pass.'", correo="'.$this->correo.'", id_grupo="'.$this->id_grupo.'" where nick="'.$this->nick.'";';
	
		$con=self::$db->prepare($sql);
		$con=execute();
	}
	
	public function setNick($nick){
		$this->nick=$nick;
	}
	
	public function setPass($pass){
		$this->pass=$pass;
	}
	
	public function setCorreo($correo){
		$this->correo=$correo;
	}
	
	public function setIdGrupo($id_grupo){
		$this->id_grupo=$id_grupo;
	}
	
	public function getNick(){
		return $this->nick;
	}
	
	public function getPass(){
		return $this->pass;
	}
	
	public function getCorreo(){
		return $this->correo;
	}
	
	public function getIdGrupo(){
		return $this->id_grupo;
	}
}
?>