<html>
<head>
  <meta charset="UTF-8">
  <title>Sign In form</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['alamat'] ?>css/login.css">
</head>

<body>
  <div id="main" class="container"> 
  <form name="loginform" id="loginform" action="<?php echo $GLOBALS['alamat'] ?>admin/login" method="post" class="wpl-track-me"> 
      <p class="login-username"> 
        <label for="user_login">Username</label> <input type="text" name="username" id="user_login" class="input" value="" size="20"
        placeholder="masukan username"> 
      </p>
      <p class="login-password"> 
        <label for="user_pass">Password</label> <input type="password" name="password" id="user_pass" class="input" value="" size="20" placeholder="masukan password"> 
      </p> 
   
      <p class="login-submit"> 
        <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Sign In"> 
      </p> 
    </form> 
  </div>

</body>
</html>