@isset($genre)

    <table>
        <thead>
            <tr>
                <th>Nama Genre</th>
                <th>deskripsi</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($genre as $item)
                <tr>
                    <td>{{$item->nama_genre}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td><a href="{{ route('genre.destroy', ['genre' => $item->id]) }}">edit</a></td>
                    <td>
                        <form action="window.location='{{ route('genre.destroy', ['genre' => $item->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endisset

<button onclick="window.location"></button>