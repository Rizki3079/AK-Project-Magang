<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Area Kerja | {{ $title }} </title>
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
        style="background-image: url('assets/img/tips-bg.png'); background-size:cover;">
        <div class="container">
            <h1 class="display-4 title-main">Tips Kerja </h1>
            <p class="lead child-main">Pelajari tips-tips kerja yang telah kami rangkum <br> untuk anda</p>
        </div>
    </div>
    

    
</body>
@include('partials.footer')
</html>