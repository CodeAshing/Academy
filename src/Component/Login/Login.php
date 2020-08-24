<!-- Created By CodingNepal -->
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>      
    <div id="particles-js" class="h-100 w-100" ></div>
    <div class="container">
      <header>
          <p class="text">Login Form</p></header>
      <form action="loginChk.php" method="POST">

        <div class="input-field">
          <input name="user" type="text" value="" required>
          <label>Email or Username</label>
        </div>

        <div class="input-field">
          <input class="pswrd" name="pass" value="" type="password" required>
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>

        <div class="button">
          <div class="inner">
            </div>
           <button type="submit" name="submit">LOGIN</button>
        </div>
        
      </form>

<div class="auth">
Or login with</div>
<div class="links">
        <div class="facebook">
          <i class="fab fa-facebook-square"><span>Facebook</span></i>
        </div>
<div class="google">
          <i class="fab fa-google-plus-square"><span>Google</span></i>
        </div>
</div>
</div>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#111";
        }
      }
    </script>

<script type="text/javascript" src="../Particles/particles.min.js"></script>
<script type="text/javascript" src="../Particles/app.js"></script>

  </body>
</html>
