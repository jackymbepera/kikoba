<!DOCTYPE html>
<html>
    <head>
        
       
       
        <link rel="icon" href="logo.jpeg">
        <link rel="stylesheet" href="css/style.css">

    
        <title>Penny pionners
        </title>

        
      
    </head>
    <body>
       
        <header>
            <div class="header">
           
                <div class="div1">
            <div class="email">
                <a href="email">pennypionners1@gmail.com</a>
            </div>

            @if (Route::has('log'))

            @auth
            <div class="right">
                <a href="">{{ Auth::user()->name }}</a>

                @endauth

            <div class="right">
                <a href="{{route ('log') }}">log in</a>

                <a href="{{route ('register') }}">sign up</a>
            </div>

            @endif
               
        </div>

        <div class="div2">
        <div class="logo"> <img src="image/logo.jpeg" alt="Logo" class="logo">
        </div>
        <div class="links">
            <a href="{{route ('home') }}">Home</a>
            <a href="{{route ('lipa') }}">Lipa</a>
            <a href="{{route ('ratibakutoka') }}">ratiba ya kutoka</a>
            <a href="{{route ('lipa') }}">gharama</a>
        <a href="{{route ('wasiliananasi') }}">wasiliana nasi</a>
    </div>
</div> 
</div>
        
        </header>
        <main>
            <div class="slideshow">
                <div class="words">
                     <h2>PENNY PIONNERS GROUP</h2>
                    
                        <h2 id="different"><B>Welcome to Kikoba: Empowering Our Community Through Collective Savings
                            At Kikoba, we believe in the power of unity and the strength that comes from supporting one another.</B></h2>
                </div>
               
            </div>
           
         
                <div class="up">
                    <h2>  Why Join Kikoba?</h2>
                </div>
                <div class="container">
            <div class="left">
                <h2 style="color: brown;">  <b>Collective Strength:</b></h2></br> 
            <p style="font-family: Georgia, serif;">By pooling our resources, we build a stronger, more resilient financial base that can support us in times of need.</p>
            </div>
            <div class="center">
                <h2 style="color: brown;">    <b>Shared Prosperity:</b> </h2></br>
                <p style="font-family: Georgia, serif;">Your savings not only benefit you but also uplift those around you, creating a ripple effect of positive change.</p>
                
            </div>
            <div class="right-center">
                <h2 style="color: brown;"></b>Trust and Transparency:</b></h2></br>
                <p style="font-family: Georgia, serif;">Our system is built on trust, accountability, and a shared commitment to helping each other achieve our goals.</p>
            </div>
            
        </div>

        <div class="container">
            <div class="left">
                <h2 style="color: brown;">  <b>100% free funds collection:</b></h2></br> 
            <p style="font-family: Georgia, serif;">
                No need for carrying cash or "tuma na ya kutolea". With Kikoba, group funds are collected for free. No hidden, no surprise charges.</p>
            </div>
            <div class="center">
                <h2 style="color: brown;">    <b> Accurate record keeping:</b> </h2></br>
                <p style="font-family: Georgia, serif;">
                   
                    Forget about pen and paper to record group finances. Kikoba is your digital ledger for recording funds collected .</p>
                
            </div>
            <div class="right-center">
                <h2 style="color: brown;"></b>Real-time Analytics:</b></h2></br>
                <p style="font-family: Georgia, serif;">
                    With real-time analytics from Kikoba, group members become smart and well-informed with their data.</p>
            </div>
            
        </div>

        
        <div class="box">
           <b><p style="font-family: Arial, Helvetica, sans-serif; font-size:20px;"> Be a part of Kikoba—where every coin counts and every member matters.</p></b>
   
        </div>

        


            
           


            
        </main>

      

            
    </body>
    <div class="foot">
  <footer>
        &copy  Copyrights 2024 Penny Pionners All rights reserved.

    
        </footer></div>
    

    
</html>
