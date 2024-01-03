<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
        <div class="mb-3">
            <form action="{{"createName"}}" method="post" >
                @csrf
                <label for="teks" class="form-label"></label>
                <input type="text" class="form-control" name="teks" placeholder="Nama usia kota">
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

        <button type="button" class="btn btn-success" onclick="window.location='{{ route('showTable') }}'">Table</button>
    </div>
    
</body>
</html>