<?php 

class DB { 
    
    private static $objInstance; 
    
    /* 
     * Class Constructor - Create a new database connection if one doesn't exist 
     * Set to private so no-one can create a new instance via ' = new DB();' 
     */ 
    private function __construct() {} 
    
    /* 
     * Like the constructor, we make __clone private so nobody can clone the instance 
     */ 
    private function __clone() {} 
    
    /* 
     * Returns DB instance or create initial connection 
     * @param 
     * @return $objInstance; 
     */ 
    public static function getInstance(  ) { 
            
        if(!self::$objInstance){ 
            self::$objInstance = new PDO("mysql:host=localhost;dbname=proyecto", "root", "root"); 
            self::$objInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } 
        
        return self::$objInstance; 
    
    } # end method 
    
    /* 
     * Passes on any static calls to this class onto the singleton PDO instance 
     * @param $chrMethod, $arrArguments 
     * @return $mix 
     */ 
    final public static function __callStatic( $chrMethod, $arrArguments ) { 
            
        $objInstance = self::getInstance(); 
        
        return call_user_func_array(array($objInstance, $chrMethod), $arrArguments); 
        
    } # end method 
    
    public function getConexion() {
    	$cn = null;
    	try {
    		$cn = new PDO("mysql:host=localhost;dbname=proyecto",
    				"root", "root");
    	} catch (PDOException $ex) {
    		throw new Exception($ex->getMessage());
    	}
    	return $cn;
    }
    
} 
?>