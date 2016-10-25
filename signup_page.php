<!-- multistep form -->
<html>
<head>
   
    <link href="assets/css/signup.css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="assets/js/signup.js"></script>
    <script type="text/javascript" src=assets/js/signcheck.js></script>
  
    <?php include("head.html"); ?>
</head>
<body>
<?php include("header.php");?>
<form id="msform" action="signup_DB.php"  method="post" name="addjoin">
  <!-- progressbar -->
    
  <!-- fieldsets -->
  <fieldset>
  
        <h2 class="fs-title">Sign up</h2>
        <h3 class="fs-subtitle">Email = ID</h3>
        <input type="text" name="email" placeholder="Email" class="input_im" />
        <input type="password" name="passwd" placeholder="Password" class="input_im"/>
        <input type="text" name="user_name" placeholder="Name" class="input_im"/>
        <input type="text" name="student_id" placeholder="Student ID" class="input_im"/>
        <select name="o_phone" class="phone_input">
            <option value="1">010</option>
            <option value="2">011</option>
            <option value="3">016</option>
            <option value="4">017</option>
            <option value="5">018</option>
            <option value="6">019</option>
        </select>
        <input type="text" name="o_phone2" class="phone_input"/>
        <input type="text" name="o_phone3" class="phone_input"/>
        
        
      
       

        <input type="button" name="next" class="next action-button" value="Next" onclick="checkfield()" id="btn_next"/>

  </fieldset>

</form>
</body>
</html>