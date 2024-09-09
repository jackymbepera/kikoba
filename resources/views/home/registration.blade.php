<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penny pionners
    </title>
    <link rel="icon" href="logo.jpeg">
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
   
    <header>
        <div class="header">
       
            <div class="div1">
        <div class="email">
            <a href="email">pennypionners1@gmail.com</a>
        </div>
        <div class="right">
            <a href="{{route ('log') }}">log in</a>

                <a href="{{route ('register') }}">sign up</a>
        </div>
           
    </div>

    <div class="div2">
    <div class="logo"> <img src="image/logo.jpeg" alt="Logo" class="logo">
    </div>
    <div class="links">
        <a href="{{route ('home') }}">home</a>
        <a href="{{route ('lipa') }}">Lipa</a>
        <a href="{{route ('ratiba') }}">ratiba ya kutoka</a>
        <a href="{{route ('lipa') }}">gharama</a>
        <a href="{{route ('wasiliananasi') }}">wasiliana nasi</a>
</div>
</div> 
</div>
</head>
<body>
    <header>
        <div class="sign_image">
            <h2 style="font-size: 30px; margin-left: 90px; margin-top: 40px;" font-family="Georgia",serif;>Function Page: Register User</h2>
        </div>
    </header>

    <main>
        <div class="form_container" >
            <div class="form_table" >

                <form method="POST" action="{{route('store')}}">

                    @csrf
                    @method('post')

                    <input type="text" id="input"  name="username"  placeholder="username" ></br>
                    <input type="text" id="input" name="fullname" placeholder="fullname" ></br>
                    <input type="email" id="input" name="user_email" placeholder="email" ></br>
                    <input type="password" id="input" name="user_password" placeholder="password" ><br>
                    <input type="checkbox" id="checbox" name="checbox" value="box">
                    <label for="checkbox"> I have read and accept the <a href="terms and policy">Terms and Privacy Policy</a></label><br>
                    <div class="button">
                         <input type="submit" id="buttn"  value="SIGN UP">
                    </div>

                    <div class="log">
                        <p style="margin-left:150px; font-family: Georgia,  serif;">Already have an account? <a href="{{route ('log') }}" style="text-decoration: none;">Log In</a></p>
                    </div>
                </form>

            </div>




        </div>
       
        
    </main>
    
</body>
<div class="foot">
    <footer>
          &copy  Copyrights 2024 Penny Pionners All rights reserved.
  
      
          </footer></div>
</html>