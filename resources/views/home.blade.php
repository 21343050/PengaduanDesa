<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Kota Binjai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{('storage/style/style.css')}}">
    <script src="https://kit.fontawesome.com/86db5acbc6.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: rgb(233, 231, 238);">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="{{('storage/image/binjai.png')}}" width="45" height="50" alt="" srcset="">
                Kelurahan Binjai
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="#"><span
                                style="color: orange;">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#about">Cek Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" class="d-flex" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container">
            <h4 class="display-3 text-start"><span style="color: orange;" class="fw-bold">Welcome</span><span
                    style="color: rgb(3, 3, 94);" class="fw-bold"> {{Auth::user()->name}}</span></h4>
            <a href="#">
                <button type="button" class="btn btn-warning btn-lg">
                    Cek Layanan
                </button>
                <button type="button" class="m-4 btn link-light btn-link btn-lg text-decoration-underline">
                    Hubungi
                </button>
            </a>
            <div class="ms-auto col-md-4 banner-img">
                <img src="" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
    <!-- about us -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-5 text-center" id="about">Cek Pengaduan</h2>
            <p class="text-center">List Pengaduan Dari Masyarakat</p>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Deskripsi Pengaduan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengaduans as $pengaduan)
                            <tr>
                                <td>
                                    {{ $pengaduan->nama }}
                                </td>
                                <td>{{ $pengaduan->email }}</td>
                                <td>{{$pengaduan->nohp}}</td>
                                <td>
                                    {!! $pengaduan->aduan !!}
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('home.destroy', $pengaduan->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $pengaduans->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container text-center pt-5 pb-5">
        © 2023 Kelurahan Binjai. All rights reserved. Design by Sinta
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>