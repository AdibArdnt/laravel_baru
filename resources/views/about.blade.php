<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        * {
            background-image: url();
            margin: 0 0 0 9px;
        }

        a {
            text-decoration: none;
            color: black;
        }



        form {
            width: 400px;
            margin-left: 100px;
        }

        .conten {
            background-color: #ccc;
            width: 700px;
            height: 550px;
            margin-left: 300px;
            margin-top: 100px;
            border-radius: 20px;
        }
    </style>
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{url('/home')}}">Home</a>
                    <a class="nav-item nav-link" href="{{url('/profile')}}">Profile</a>
                    <a class="nav-item nav-link" href="{{url('/kontak')}}">Contact Us</a>
                    <a class="nav-item nav-link" href="{{url('/about')}}">About</a>
                </div>
            </div>

        </nav>
    </div>

    <h1>Data Mahasiswa</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$item -> nama}}</td>
                <td>{{$item -> nim}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> jurusan}}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</html>