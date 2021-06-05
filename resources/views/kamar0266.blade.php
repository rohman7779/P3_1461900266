<head>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <title>Data Kamar</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width:100%;
            border: 1px solid #ddd;
        }
        thead{
            background-color: #f2f2f2;
        }
        th, td {
            text-align:left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah {
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x: auto">
        <a class="tambah Kamar" href="{{route('kamarTambah0266.create')}}">Tambah Data</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Kamar</th>
                    <th>Id pasien</th>
                    <th>Nama pasien</th>
                    <th>Alamat pasien</th>
                    <th>Id dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($datakamarjoin as $kamar)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kamar->idKamar}}</td>
                    <td>{{$kamar->id_pasien}}</td>
                    <td>{{$kamar->namaPasien}}</td>
                    <td>{{$kamar->alamat}}</td>
                    <td>{{$kamar->id_dokter}}</td>
                    <td>{{$kamar->nama}}</td>
                    <td>{{$kamar->jabatan}}</td>
                    <td>
                        <a href="{{url('kamar0266/'. $kamar->idKamar."/edit")}}">Edit</a>
                        <form action="{{url('kamar0266/'. $kamar->idKamar)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>