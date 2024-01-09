@isset($barang)
<table>
    <thead>
        <th>nama barang</th>
        <th>id rak</th>
    </thead>
    <tbody>
        @foreach ($barang as $item)
            <td>{{$item->nama_barang}}</td>
            <td>{{$item->id_rak}}</td>
        @endforeach
    </tbody>
</table>
    
@endisset
<button onclick="window.location='{{ route('barang.create') }}"></button>