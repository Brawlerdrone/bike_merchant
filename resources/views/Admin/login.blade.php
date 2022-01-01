<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/validation.css')}}">
</head>
<body>
    <div class="container">
        <div class="login">
          <h1>Login to Dashboard</h1>
          <form method="post" action="{{url('/admin')}}">
            @csrf
            <p><input id= "email" type="email" name="email" value="" placeholder="Username or Email"></p>
            <p><input id ="password" type="password" name="password" value="" placeholder="Password"></p>
            <p class="remember_me">
              <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Remember me on this computer
              </label>
            </p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
          </form>
        </div>
       
        <div class="login-help">
          <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
        </div>
      </div>
    
</body>
</html>
