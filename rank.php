<?    session_start();?>
<?php



 include "sqlconn.php";
    
    $sql = "select * from user_imp order by score desc"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $result = $stmt->fetchAll(); 

    
        
?>