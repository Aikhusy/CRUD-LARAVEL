@isset($ruangan)
    <form action="{{ route('ruangan.update', ['ruangan' => $ruangan->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="nama_ruangan">Nama Ruangan:</label>
        <input type="text" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}" required><br>

        <label for="kode_ruangan">Kode Ruangan:</label>
        <input type="text" name="kode_ruangan" value="{{ $ruangan->kode_ruangan }}" required><br>

        <label for="status_active">Status:</label>
        <input type="radio" name="apakah_ditempati" id="sedang_ditempati_true" value="1" {{ $ruangan->apakah_ditempati ? 'checked' : '' }} required> Active<br>
        
        <label for="status_inactive">Status:</label>
        <input type="radio" name="apakah_ditempati" id="sedang_ditempati_false" value="0" {{ !$ruangan->apakah_ditempati ? 'checked' : '' }} required> Inactive<br>  

        <label for="total_kursi">Total Kursi:</label>
        <input type="number" name="total_kursi" value="{{ $ruangan->total_kursi }}" required><br>

        <button type="submit">Submit</button>
    </form>
@endisset
