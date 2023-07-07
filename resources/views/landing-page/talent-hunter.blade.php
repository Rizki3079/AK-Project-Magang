<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talent Hunter</title>

    {{-- bootstrap 5 --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- mystyle css --}}
    <link rel="stylesheet" type="text/css"href="assets/css/talent-hunter.css">

    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

    {{-- navbar --}}
    @include('partials.navbar')

    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid"
        style="background-image: url('assets/img/bg-hero-talent-hunter.png'); background-size:cover;">
        <div class="container">
            <h1 class="display-4 title-main font-weight-bold">Talent <br> Hunter</h1>
            <p class="lead child-main">Daftarkan perusahaan anda dan biar kami <br> yang mencarikan kandidat yang cocok untuk anda</p>
        </div>

        <button type="button" class="btn"
                    style="background-color: rgba(242, 100, 25, 1); color: white;">Daftar</button>
    </div>

    <div class="konten">
        <div class="row">
            <div class="col-sm-6">
                <img src="assets/img/pic-main-talent-hunter.png" >
            </div>
            <div class="col-sm-6">
                <h1>Langkah-Langkah <br> Daftar Talent Hunter</h1>
                    <ol>
                        <li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio adipisci maiores minima laborum laudantium ollam, perferendis amet earum similique quasi.</h5></li>
                        <li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio adipisci maiores minima laborum laudantium ullam, perferendis amet earum similique quasi.</h5></li>
                        <li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio adipisci maiores minima laborum laudantium ullam, perferendis amet earum similique quasi.</h5></li>
                        <li><h5> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio adipisci maiores minima laborum laudantium ullam, perferendis amet earum similique quasi.</h5></li>
                    </ol>
                    
            </div>
        </div>

        {{-- benefit talent hunter --}}
        <h1 id="title-benefit">Benefit Talent Hunter</h1>
        <hr style="width: 30%; margin-top: -30px; border: 2px solid rgba(242, 100, 25, 1); border-radius: 5px;">

        <div class="container wadah-icon-benefit">
            <div class="row">
                <div class="col-sm-3"><img src="assets/icon-img/icon-ceklis-talent-hunter.png" style="width: 55px;margin-bottom: 20px;"><p>Mendapatkan kandidat sesuai kebutuhan perusahaan</p></div>
                <div class="col-sm-3"><img src="assets/icon-img/icon-person-talent-hunter.png" style="width: 55px; margin-bottom: 20px;"><p>Kandidat yang didapatkan dipastikan siap kerja</p></div>
                <div class="col-sm-3"><img src="assets/icon-img/icon-filter-talent-hunter.png" style="width: 55px; margin-bottom: 15px;"><p>Mempermudah perusahaan dalam penyaringan kandidat</p></div>
                <div class="col-sm-3"><img src="assets/icon-img/icon-verify-talent-hunter.png" style="width: 55px; margin-bottom: 20px;"><p>Jaminan ganti kandidat yang baru jika tidak cocok</p></div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    {{-- footer --}}
    @include('partials.footer')


    {{-- bootstrap js 5 --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    {{-- bootstrap js 4 --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
</body>
</html>