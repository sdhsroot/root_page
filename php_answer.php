<?   session_start(); ?>
   

   <?php
    include "sqlconn.php";
    $answer = $_POST['answer'];

    $sql = "select * from answer_ctf"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $result = $stmt->fetchAll(); 

    foreach($result as $row)
    {
        if($row['answer'] == $answer)
        {
            $sql = "select * from answer_score where :answer";
            $stmt = $pdo->prepare($sql); 
            $stmt->bindValue(':answer', $answer); 
            $stmt->execute(); 
            $result = $stmt->fetchAll(); 
            
            print $result;
        }
    }
?>