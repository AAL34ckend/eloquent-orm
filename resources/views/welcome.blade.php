<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Netflix</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="">
        <div class="container text-center p-4">
            <h1 class="mb-3">Daftar Film</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Tempat Sampah</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $key => $jack )
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $jack->titles }}</td>
                                <td>{{ $jack->genres }}</td>
                                <td>{{ $jack->durations }}</td>
                                <td>{{ $jack->ratings }}</td>
                                <td>{{ $jack->created_at }}</td>
                                <td class="{{ $jack->deleted_at ? 'text-success':'text-danger' }}">{{ $jack->deleted_at ? 'Ada' : 'Tidak ada'}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
