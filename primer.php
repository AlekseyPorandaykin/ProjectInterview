<html>
	<head><title>Таблица</title><meta charset="utf-8"></head>
		<body>
<?php
 try{ 
include_once 'DAO/AuthorizationDAO.php';
include_once 'model/ValuesAuthorization.php';
$username= "Иван";
$user_password=1;
$values_auth= new ValuesAuthorization();
$values_auth->setLogin($username);
$values_auth->setPassword($user_password);
$dao_auth=new AuthorizationDAO();
echo $dao_auth->getAuthUser($values_auth);
 }

catch (Exception $e){
    $error= $e->getMessage().'. Строка '.$e->getLine().': '. ' ('. $e->getFile().')';
    echo $error;                            
}
?>
                    	</body>
</html>