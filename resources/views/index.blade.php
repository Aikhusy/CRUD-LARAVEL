<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" id="container">
        <form action="{{"createName"}}" method="post" >
            @csrf
            <label for="teks"></label>
            <input type="text" name="teks" placeholder="Nama usia kota">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>