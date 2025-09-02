<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="foto1" placeholder="Masukkan foto1">
        <input type="file" name="foto2" placeholder="Masukkan foto2">
        <input type="file" name="foto3" placeholder="Masukkan foto3">
        <input type="file" name="foto4" placeholder="Masukkan foto4">
        <input type="file" name="foto5" placeholder="Masukkan foto5">
        <input type="file" name="foto6" placeholder="Masukkan foto6">
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
