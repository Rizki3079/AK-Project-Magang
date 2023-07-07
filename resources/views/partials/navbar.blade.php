<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === 'Tampilan Awal') ? 'font-underline' : '' }}" aria-current="page" href="/tampilan-awal"
                    style="color: rgba(242, 100, 25, 1);">Beranda</a>
                <a class="nav-link {{ ($title === 'Talent Hunter') ? 'font-underline' : '' }}" href="/talent-hunter" style="color: rgba(242, 100, 25, 1);">Talent Hunter</a>
                <a class="nav-link" href="" style="color: rgba(242, 100, 25, 1);">Tips Kerja</a>
                <a class="nav-link" href="#" style="color: rgba(242, 100, 25, 1);">Daftar Kandidat</a>
                <a class="nav-link" href="#" style="color: rgba(242, 100, 25, 1);">Pasang Lowongan</a>
                <button type="button" class="btn "
                    style="background-color: rgba(242, 100, 25, 1); color: white;">Masuk</button>
            </div>
        </div>
    </div>
</nav>