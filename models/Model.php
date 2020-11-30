<?php
class Model {


    protected $bd;
    protected $usuari="root";
    protected $password="";
    protected $taula;
    protected $database ="UF3";

    function __construct() {
		 
		try {
			
			$this->bd = new PDO('mysql:host=localhost;dbname='.$this->database, 
                     $this->usuari, $this->password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
)); 	   

		} catch (PDOException $e) {
			echo "Error: No s'ha pogut connectar amb la base de dades";
			die();
		}

    }

    public function getAll() {
	 $sql = "select * from ".$this->taula;	
         
    	 $ordre = $this->bd->prepare($sql);	
         $ordre->execute();   
         $res = $ordre->fetchAll(PDO::FETCH_ASSOC); 
         return $res;
    }

    public function get($codi) {
	    $sql="select * from ".$this->taula." where id=:codi";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':codi',$codi);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }

    public function delete($codi) {
	     $sql ="delete from ".$this->taula." where id=:codi";
         $ordre = $this->bd->prepare($sql);	 
         $ordre->bindValue(':codi',$codi);		   
	     $res = $ordre->execute();
         return $res;
    }

        

}

?>
