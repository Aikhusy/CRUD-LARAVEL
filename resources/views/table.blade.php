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
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">umur</th>
                <th scope="col">kota</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>
                        <form action="{{ route('deleteItem', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> 
                    </td>
                    
                </tr>
            @endforeach
        </table>
        <br>
        <button type="button" class="btn btn-success" onclick="window.location='{{ route('index') }}'">Back</button>
    </div>
</body>
</html>