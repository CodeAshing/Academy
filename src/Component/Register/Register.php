<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">    
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>      
    <div id="particles-js" class="h-100 w-100" ></div>
    <div class="container" >
        <div class="text">
            Register
        </div>
        <form action="link.php" method="POST">
            <div class="form-row">

                <div class="input-data">
                    <input name="first" type="text" required>
                    <div class="underline"></div>
                <label for="">First Name</label>
                </div>

            <div class="input-data">
                <input name="last" type="text" required>
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>

    <div class="form-row">
        <div class="input-data">
            <input name="email" type="text" required>
            <div class="underline">
        </div>
        <label for="">Email Address</label>
    </div>
        <div class="input-data">
            <input name="depart" type="text" required>
            <div class="underline"></div>
            <label for="">Department</label>
        </div>

        <div class="input-data">
            <input name="cnic" type="text" required>
            <div class="underline"></div>
            <label for="">CNIC</label>
        </div>
        
   </div>

   
    <div class="form-row">
        <div class="input-data">
            <input name="city" type="text" required>
            <div class="underline">
        </div>
        <label for="">City</label>
    </div>
        <div class="input-data">
            <input name="country" type="text" required>
            <div class="underline"></div>
            <label for="">Country</label>
        </div>

        <div class="input-data">
            <input name="age" type="text" required>
            <div class="underline"></div>
            <label for="">Age</label>
        </div>
        
   </div>
   
    <div class="form-row">
        <div class="input-data">
            <input name="father" type="text" required>
            <div class="underline">
        </div>
        <label for="">Father</label>
    </div>

        <div class="input-data">
            <input name="gender" type="text" required>
            <div class="underline"></div>
            <label for="">Gender</label>
        </div>
        
   </div>
   
    <div class="form-row">
        <div class="input-data">
            <input name="address" type="text" required>
            <div class="underline">
        </div>
        <label for="">Address</label>
    </div>
        
   </div>

    <div class="form-row">
        <div class="input-data textarea">
            <changeit rows="8" cols="80" required></changeit> 
            <br />
            <div class="form-row submit-btn">
                
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" name="submit" value="submit">
                </div>
                </div>
         </form>
    </div>
<script type="text/javascript" src="../Particles/particles.min.js"></script>
<script type="text/javascript" src="../Particles/app.js"></script>


  </body>
</html>
