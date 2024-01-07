<form action="{{ route('ruangan.store') }}" method="post">
    @csrf
    <label for="nama_ruangan">Nama Ruangan:</label>
    <input type="text" name="nama_ruangan" required><br>

    <label for="kode_ruangan">Kode Ruangan:</label>
    <input type="text" name="kode_ruangan" required><br>

    <label for="status_active">Status:</label>
    <input type="radio" name="apakah_ditempati" id="sedang_ditempati" value="1" required> Active<br>
    
    <label for="status_inactive">Status:</label>
    <input type="radio" name="apakah_ditempati" id="sedang_ditempati" value="0" required> Inactive<br>  

    <label for="total_kursi">Total Kursi:</label>
    <input type="number" name="total_kursi" required><br>

    <button type="submit">Submit</button>
</form>