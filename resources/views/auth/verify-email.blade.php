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
    <p>
        verifikasi link sudah dikirim        
    </p>

    <form method="POST" action="{{ route('verification.send')}}"> 
        @csrf
        <button type="submit">klik untuk mengirim email verifikasi</button>
    </form>
</body>
</html>