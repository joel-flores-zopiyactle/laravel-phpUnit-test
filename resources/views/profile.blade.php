<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
               <li> {{$error}}</li>
            @endforeach
        @endif

        <form action="profile" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photo" id="file">

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
