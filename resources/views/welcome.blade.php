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
                        <a class="nav-link fw-bolder" href="#galery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#kontak">Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="{{route('login')}}">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container">
            <h4 class="display-3 text-start"><span style="color: orange;" class="fw-bold">Kelurahan</span><span
                    style="color: rgb(3, 3, 94);" class="fw-bold"> Binjai</span></h4>
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
    <!-- gallery -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-5" id="galery">Galeri</h2>
            <p>Check Our Photo</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/fotbar.jpg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/pemko.jpg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/mesjid.jpeg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/wisata.jpeg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/destinasi.jpeg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{('storage/image/bolon.jpeg')}}" class="card-img-top" alt="..." height="210"
                            width="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-5 text-center" id="about">Tentang</h2>
            <p class="text-center">Wali Kota Binjai tinjau banjir</p>
            <div class="clearfix pt-5">
                <img src="{{('storage/image/ticing.jpg')}}" class="col-md-6 float-md-end mb-3 crop-img" width="300"
                    height="300" alt="">
                <p> Binjai (ANTARA) - Wali Kota Binjai Amir Hamzah meninjau banjir yang diakibat hujan deras yang
                    mengguyur Kota Binjai sejak Kamis malam (5/10) hingga Jumat (6/10) dini hari, sehingga tiga sungai
                    yang ada yakni Sungai Bingai, Sungai Mencirim dan Sungai Bangkatan meluap, akibatnya terjadi banjir
                    di beberapa kelurahan yang tersebar di tiga kecamatan yaitu Kecamatan Binjai Selatan, Kecamatan
                    Binjai Kota dan Kecamatan Binjai Utara.</p>
                <p>Pemerintah Kota Binjai melalui Dinas Sosial juga akan memberikan bantuan kepada 1.089 KK yang
                    terdampak banjir. Saat ini, Dinas Sosial dan BPBD Kota Binjai bekerja sama membangun dapur umum bagi
                    warga yang terdampak yang berlokasi di Jalan Imam Bonjol Kelurahan Setia tepatnya di Jembatan
                    Mencirim (Perbatasan Mencirim) dan di Panti Asuhan Jalan Bukit Tinggi, Kelurahan Rambung Timur.</p>
            </div>
        </div>
    </div>
    <!-- contact us -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-5 text-center" id="kontak">Pengaduan</h2>
            <p class="text-center">Pesan & Kesan Terhadap Kelurahan Binjai</p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <form action="{{route('welcome')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control form-control-lg mb-3 bulat" placeholder="Nama"
                            name="nama" value="{{old('nama')}}">
                        <input type="text" class="form-control form-control-lg mb-3 bulat" placeholder="Email"
                            name="email" value="{{old('email')}}">
                        <input type="text" class="form-control form-control-lg bulat" placeholder="No HP" name="nohp"
                            value="{{old('nohp')}}">
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg bulat" name="aduan" id="" rows="5"
                        value="{{old('aduan')}}"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="submit" class="btn btn-warning btn-lg">Kirim Pesan</button>
            </div>
            </form>
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