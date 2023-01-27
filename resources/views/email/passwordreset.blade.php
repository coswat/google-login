<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Password Reset Mail</title>
  </head>
  <body>
    Hello {{ $user->name }} Click Below Button To Reset Password
    <br>
    
    <a href="{{ route('reset.pass',$token) }}" >Change Password</a>
    
  </body>
</html>