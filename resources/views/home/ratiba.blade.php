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
            <div class="right">
                <a href="{{route ('log') }}">log in</a>

                <a href="{{route ('register') }}">sign up</a>
            </div>
               
        </div>

        <div class="div2">
        <div class="logo"> <img src="image/logo.jpeg" alt="Logo" class="logo">
        </div>
        <div class="links">
            <a href="{{route ('home') }}">Home</a>
            <a href="{{route ('lipa') }}">lipa</a>
            <a href="{{route ('ratiba') }}">ratiba ya kutoka</a>
            <a href="{{route ('lipa') }}">gharama</a>
            <a href="{{route ('wasiliananasi') }}">wasiliana nasi</a>
    </div>
</div> 
</div>


   <div class="table">
    <table>
        <th colspan="5"> FIRST ROUND</tr>
        <tr>
            <th>ID</th>
            <th>userID</th>
            <th>date</th>
            <th>amount</th>
            <th>edit</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data->username}}</td>
            <td>{{$data->fullname}}</td>
            <td>{{$data->user_email}}</td>
            <td>{{$data->user_password}}</td>
            <td><a href="{{url('edit_info', $data->id)}}">edit</a></td>
        </tr>

    @endforeach
    </table>
</div>

</body>

{{-- <div class="foot">
    <footer>
          &copy  Copyrights 2024 Penny Pionners All rights reserved.
  
      
          </footer></div> --}}

      
  </html>