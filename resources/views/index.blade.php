<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perumahan</title>
</head>

<body>
    <table border="1cm">
        <thead>
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>Luas</td>
                <td>Harga</td>
            </tr>
            <tr>
                @foreach($data as $perumahan)
                <td>{{$no++}}</td>
                <td>{{$perumahan->nama_perumahan}}</td>
                <td>{{$perumahan->luas_perumahan}}</td>
                <td>{{$perumahan->harga_perumahan}}</td>
            </tr>
            @endforeach
        </thead>
        <tbody>

        </tbody>
    </table>
</body>

</html>