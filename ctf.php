<!-- multistep form -->
<?php session_start(); 
if(isset($_SESSION['email']))
{
}
else
{
    header('Location: ./index.php'); 
}
?>
<html>
<head>

    <link href="assets/css/signup.css" rel="stylesheet" />
    <link href="assets/css/ctf.css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="assets/js/signup.js"></script>
    <script type="text/javascript" src=assets/js/signcheck.js></script>
    <?php include("head.html"); ?>
</head>
<body>
<?php include("header.php");?>
    
<center>
    
<div id="jb-container">
    <form id="ctfform" action="php_answer.php" method="post">
    <fieldset>
        <input type="text" placeholder="Answer" name="answer"/>
    </fieldset>
</form>
     
      <div id="jb-content">
       

          <center><h2>Web</h2></center>
          <button>100</button>
          <button>200</button> 
          <button>300</button> 
          <button>400</button> 
          <button>500</button>
          <p>-</p>
       
          <center><h2>Reversing</h2></center>
          <button>100</button>
          <button>200</button> 
          <button>300</button> 
          <button>400</button> 
          <button>500</button>
          <p>-</p>
        
          
          <center><h2>Forensic</h2></center>
          <button>100</button>
          <button>200</button>
          <!-- onClick="window.open('ctf/foren_5.php', 'CLIENT_WINDOW', 'resizable=yes scrollbars=yes width=500 height=740')" --> 
          <button>300</button> 
          <button>400</button> 
          <button>500</button>
          <p>-</p>
        
      </div>
      <div id="jb-sidebar">
          <center><h2>CTF Rank</h3></center>
        <ul>
            <?php
                $number = 1;
                include "rank.php";
                foreach($result as $row)
                {
                    print "No.".$number.$row['user_name'].$row['score']."점"."<br>";
                    $number++;
                }
                $number = 1;
            
            ?>  
        </ul>
      </div>
      <div id="jb-footer">
        <p>비정상적인 방법으로 답을 찾았을 경우를 대비해 대회 종료후 문제풀이를 제출하셔야 합니다</p>
      </div>
    </div>
  </center>
</body>
</html>