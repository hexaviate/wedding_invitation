<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('waktuDanTempat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="datetime-local" name="tanggalAkad" placeholder="Masukkan Slug">
        <input type="datetime-local" name="tanggalResepsi" placeholder="Masukkan Slug">
        <input type="text" name="alamat_akad" placeholder="alamat_akad">
        <input type="text" name="alamat_resepsi" placeholder="alamat_resepsi">
        <input type="text" name="map_alamat_akad" placeholder="map_alamat_akad">
        <input type="text" name="map_alamat_resepsi" placeholder="map_alamat_resepsi">
        <select name="isi_undangan_id" id="">
            @foreach ($isiUndangan as $item)
                <option selected disabled>Pilih isiUndangan</option>
                <option value="{{ $item->id }}">
                    {{ $item->undangan->slug }}
                </option>
            @endforeach
        </select>
        <input type="submit">
    </form>
</body>

</html>
