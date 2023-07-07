<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan Awal</title>

    {{-- bootstrap 5 --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- mystyle css --}}
    <link rel="stylesheet" type="text/css"href="assets/css/tampilan-awal.css">

    {{-- icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
</head>

<body>

    @include('partials.navbar')


    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid"
        style="background-image: url('assets/img/bg-hero-1.png'); background-size:cover;">
        <div class="container">
            <h1 class="display-4 title-main">Tempatnya <br> Cari Kerja</h1>
            <p class="lead child-main">Temukan loker terbaru se-Indonesia <br> dengan mudah!</p>
        </div>
    </div>

    <div class="container content">
        {{-- menu main --}}
        <div class="menu-main">
            <div class="row">
                <div class="col-sm">
                    <div class="wadah"><img src="assets/icon-img/icon-perusahaan.png" width="30px"> Perusahaan</div>
                </div>
                <div class="col-sm">
                    <div class="wadah" ><img src="assets/icon-img/icon-area.png" width="25px"> 
                        Area
                        <div class="dropdown" style="display: inline-block; margin-left: 50px;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);" >
                                
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wadah"><img src="assets/icon-img/icon-posisi.png" width="20px"> 
                        Posisi
                        <div class="dropdown" style="display: inline-block; margin-left: 50px;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);" >
                                
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wadah"><img src="assets/icon-img/icon-jenis.png" width="25px"> 
                        Jenis
                        <div class="dropdown" style="display: inline-block; margin-left: 50px;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px; background-color: transparent; color: rgba(242, 100, 25, 1);" >
                                
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn  button-search" style="background-color: rgba(242, 100, 25, 1);">Cari <img
                    src="assets/icon-img/icon-search.png" width="20px"></button>
        </div>

        {{-- rekomendasi postingan --}}


        <h3 style="margin-top: 200px">REKOMENDASI</h3>

        {{-- carousel rekomendasi --}}
        <div class="rekomendasi">
            <div class="row">
                <div class="col-sm-1">
                    <img src="assets/icon-img/icon-previous.png" class="icon">
                </div>
                <div class="col-sm">
                    <div class="wadah">
                        <div class="container emblem-rekomendasi">
                            Rekomendasi
                        </div>
                        <h5>Videographer</h5>
                        <img src="assets/img/logo-seven-inc.png">

                        {{-- deskripsi informasi lowongan --}}
                        <div class="container konten-deskripsi">
                            <div>
                                <span class="material-icons">business</span>
                                Seven Inc
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons"> timelapse</span>
                                Full-Time</span>
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons">paid</span>
                                Rp.2.5 - 4.5 jt/bulan</span>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wadah">
                        <div class="container emblem-rekomendasi">
                            Rekomendasi
                        </div>
                        <h5>Videographer</h5>
                        <img src="assets/img/logo-seven-inc.png">

                        {{-- deskripsi informasi lowongan --}}
                        <div class="container konten-deskripsi">
                            <div>
                                <span class="material-icons">business</span>
                                Seven Inc
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons"> timelapse</span>
                                Full-Time</span>
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons">paid</span>
                                Rp.2.5 - 4.5 jt/bulan</span>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wadah">
                        <div class="container emblem-rekomendasi">
                            Rekomendasi
                        </div>
                        <h5>Videographer</h5>
                        <img src="assets/img/logo-seven-inc.png">

                        {{-- deskripsi informasi lowongan --}}
                        <div class="container konten-deskripsi">
                            <div>
                                <span class="material-icons">business</span>
                                Seven Inc
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons"> timelapse</span>
                                Full-Time</span>
                                <hr>
                            </div>
                            <div>
                                <span class="material-icons">paid</span>
                                Rp.2.5 - 4.5 jt/bulan</span>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <img src="assets/icon-img/icon-next.png" class="icon">
                </div>
            </div>
            
        </div>

        {{-- section lowongan terbaru --}}

        <h3 style="margin-top: 50px">LOWONGAN TERBARU</h3>

        {{-- postingan lowongan terbaru --}}
        <div class="lowongan-terbaru">
            {{-- baris 1 --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- baris 2 --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- baris 3 --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post">
                        <div class="row"> 
                            <div class="col-sm-4" style="margin-top: 30px;">
                                <img src="assets/img/logo-seven-inc.png">
                            </div>
                            <div class="col-sm-8" >
                                <h4 style="margin-bottom: 20px;margin-top: 20px">Videographer</h4>
                                <div class="container konten-deskripsi" style="padding: 5px">
                                    <div>
                                        <span class="material-icons">business</span>
                                        Seven Inc
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons"> timelapse</span>
                                        Full-Time</span>
                                        <hr>
                                    </div>
                                    <div>
                                        <span class="material-icons">paid</span>
                                        Rp.2.5 - 4.5 jt/bulan</span>
                                        <hr>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <img src="assets/gif/loading-footer.gif" class="gif-loading">

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
