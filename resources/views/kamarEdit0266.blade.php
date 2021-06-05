<form action="{{url('kamar0266/'. $datakamaredit->idKamar)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    id kamar<input type="text" name="id_kamar" value="{{$datakamaredit->idKamar}}">
    id pasien<input type="text" name="id_pasien" value="{{$datakamaredit->idPasien}}">
    id dokter<input type="text" name="id_dokter" value="{{$datakamaredit->idDokter}}">
    <button type="submit">Simpan</button>
</form>