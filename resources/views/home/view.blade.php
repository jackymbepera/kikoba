<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>view data</h2>
    <form method="POST" action="{{route('store')}}">

        @csrf
        @method('post')

        <input type="text" id="input"  name="username" value="{{ $data->username}}"  ></br>
        <input type="text" id="input" name="fullname" value="{{ $data->fullname}}" ></br>
        <input type="email" id="input" name="user_email "value="{{ $data->user_email}}"></br>
        <input type="password" id="input" name="user_password"value="{{ $data->user_password}}" ><br>
        <div class="button">
            <input type="submit" id="buttn"  value="SUBMIT" >
       </div>
    </form>
</body>
</html>