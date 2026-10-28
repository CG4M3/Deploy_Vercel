<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm border border-light-subtle mt-2">  
        <div class="container-fluid">
                <div class="w-25">
                    <div class="row align-items-center g-0">
                        <div class="col-md-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                        </svg>
                        </div>
                        <div class="col-md-10">
                            <a class="navbar-brand" href="/profilLengkap">
                    
                    <strong>SMK PGRI WLINGI</strong></a>
                        <p class="card-text opacity-50">SMP / SMK / SMA</p>
                        </div>
                    </div>
                    
                    </div>
                   
                <!-- TOMBOL INI YANG MUNGKIN HILANG/BELUM ADA UNTUK RESPONSIF NAVBAR DALAM LAYAR KECIL -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mb-2 w-75 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="/websekolah">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kesiswaan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Berita
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                            </li>
            
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="/contoh">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="/testberanda">Kontak</a>
                            </li>
                        </ul>
                    </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>

        </div>

    </nav>

    <!-- BAGIAN 2 -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images.jpg" class="d-block w-100" height="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images_garou.jpg" class="d-block w-100" height="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images_saitama.jpg" class="d-block w-100" height="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mt-2 m-auto">
        <div class="col-md-9">
            <div class="col-12">

                <div class="col-md">

                    <div class="card mb-3" style="max-width: auto;">
                        <div class="card-header">
                             <h3>Sambutan Kepala Sekolah</h3>
                        </div>
                       
                        <div class="row g-0">
                            <div class="col-md-4 p-3">
                                <img src="images_shigatsu-violin.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title m-0">Kegiatan Terbaru</h4>
                            <div class="card-subtitle m-0">Lihat Semua Kegiatan</div>
                        </div>
                        
                        <div class="card-body p-2 d-flex">
                            <!-- 1 -->
                            <div class="card" style="width: 18rem;">
                                <div class="row flex-column">
                                    <div class="col-md">
                                    <img src="images.jpg" class=" d-block object-fit-cover border rounded"
                                    height="100" alt="..." style="width: 100%">
                                </div>

                                <div class="col-md">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                </div>
                                </div>

                                </div>
                                
                            </div>
                            <!-- 2 -->
                            <div class="card" style="width: 18rem;">
                                <div class="row flex-column">
                                    <div class="col-md">
                                    <img src="images.jpg" class=" d-block object-fit-cover border rounded"
                                    height="100" alt="..." style="width: 100%">
                                </div>

                                <div class="col-md">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                </div>
                                </div>

                                </div>
                                
                                
                                
                            </div>
                            <!-- 3 -->
                            <div class="card" style="width: 18rem;">
                                <div class="row flex-column">
                                    <div class="col-md">
                                    <img src="images.jpg" class=" d-block object-fit-cover border rounded"
                                    height="100" alt="..." style="width: 100%">
                                </div>

                                <div class="col-md">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                </div>
                                </div>

                                </div>
                                
                                
                                
                            </div>
                            <!-- 4 -->
                            <div class="card" style="width: 18rem;">
                                <div class="row flex-column">
                                    <div class="col-md">
                                    <img src="images.jpg" class=" d-block object-fit-cover border rounded"
                                    height="100" alt="..." style="width: 100%">
                                </div>

                                <div class="col-md">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                </div>
                                </div>

                                </div>
                                
                            </div>

                        </div>



                    </div>
                </div>

            </div>

        </div>


        <div class="col-md-3">

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action">A
                            second link item</a></li>
                    <li class="list-group-item"><a href="https://sikabar.smkpgriwlingi.sch." target="_blank"
                            class="list-group-item list-group-item-action">A third link item SiKabar</a></li>
                    <li class="list-group-item"><a href="#"
                            class="list-group-item list-group-item-action disabled">A fourth "a" tag disabled
                            link item</a></li>
                    <li class="list-group-item"> <button type="button"
                            class="list-group-item list-group-item-action" disabled>A disabled button
                            item</button></li>
                </ul>

                <div class="card-footer">
                    Card footer
                </div>

            </div>

        </div>

    </div>
    </div>

    <footer class="text-white bg-dark mt-2 text-center" style="height: 4rem;">
        <div class="row ">
            <div class="col-md">
                <p>&copy; 2026 Copyright: <strong class="text-warning">Fadani Project</strong></p>
            </div>
            <div class="col-md">
                <p>&copy; 2026 Copyright: <strong class="text-warning">Fadani Project</strong></p>
            </div>
            <div class="col-md">
                <p>&copy; 2026 Copyright: <strong class="text-warning">Fadani Project</strong></p>
            </div>
        </div>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
