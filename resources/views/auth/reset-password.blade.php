<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- {{Auth::user()}} --}}
    <h2>
        Forgot password        
    </h2>

    <form method="POST" action="{{route('password.update')}}"> 
        @csrf
        <label for="email">email</label>
        <input type="text" name="email" value="{{$_GET['email']}}" readonly>

        <label for="password">Password</label>
        <input type="password" name="password">

        <label for="password_confirmation">password confirm</label>
        <input type="password" name="password_confirmation">

        <input type="hidden" name="token" value="{{$token}}">

        <button type="submit">Submit</button>
        
    </form>
</body>
</html>