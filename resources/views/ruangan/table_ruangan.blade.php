@isset($ruangan)
    <table>
        <thead>
            <tr>
                <th>nama ruangan</th>
                <th>kode ruangan</th>
                <th>tersedia</th>
                <th>total kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $item)
                <tr>
                    <td>{{ $item->nama_ruangan }}</td>
                    <td>{{ $item->kode_ruangan}}</td>
                    <td>{{ $item->sedang_ditempati }}</td>
                    <td>{{ $item->total_kursi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endisset

<button type="button" onclick="window.location='{{ route('ruangan.create') }}'">Go to Create</button>