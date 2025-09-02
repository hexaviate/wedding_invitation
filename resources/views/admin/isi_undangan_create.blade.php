<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('isiUndangan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="lagu" placeholder="Masukkan Slug">
        <input type="datetime-local" name="waktu_pernikahan" placeholder="waktu_pernikahan">
        <select name="undangan_id" id="">
            @foreach ($undangan as $item)
                <option selected disabled>Pilih Admin</option>
                <option value="{{ $item->id }}">
                    {{ $item->slug }}
                </option>
            @endforeach
        </select>
        <input type="submit">
    </form>
</body>

</html>
