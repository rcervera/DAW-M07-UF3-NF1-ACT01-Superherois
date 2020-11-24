<?php
include_once 'Model.php';

class Usuaris extends Model{
	
    protected $taula ="usuaris";

    public function valida($user,$pwd){
        $sql = "SELECT username,password from usuaris where 
                username = :nom AND password = :pwd";
		$sentencia = $this->bd->prepare($sql);
		$sentencia->bindValue(':nom',$user);
		$sentencia->bindValue(':pwd', md5($pwd));
		$sentencia->execute();
		$resultat = $sentencia->fetch();
		if ($resultat==null)
			return false;
		else
			return true;

  }
  
}

?>

