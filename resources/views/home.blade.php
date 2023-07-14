<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Naik Kelas</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        {{-- Header --}}
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
                <div class="container">
                    <a class="navbar-brand" href=".">Naik Kelas</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
        </header>
        {{-- header --}}

        {{-- jumbotron --}}
        <div class="jumbotron">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="jumbotron-left col-lg d-flex flex-column justify-content-center gap-3">
                        <h1 class="fw-bold">Where Student <span class="text-warning"> Go </span> Another Level</h1>
                        <h4>Organization that empower student since 2023</h4>
                        <button class="glass-button" href="#" role="button">Join Us</button>
                    </div>
                    <div class="jumbotron-right col-lg">
                        <div class="image-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- jumbotron --}}


        {{-- our-mission --}}
        <div class="our-mission">
            <div class="container">
                <div class="row">
                    <div class="our-mission-left col-lg">
                        <div class="image-wrapper"></div>
                    </div>
                    <div class="our-mission-right col-lg d-flex flex-column justify-content-center">
                        <h4 class="text-info-emphasis">About Naik Kelas</h4>
                        <h1 class="fw-bold">Our Mission to <span class="text-warning">create</span> more developer</h1>
                        <h5>On a mission to create the better student for the better world. By bring the best of our to others. Help others by share and contribute your thoughts, votes, codes and many more.</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- our-mission --}}

        {{-- what-we-do --}}

        <div class="what-we-do">
            <div class="container">
                <h1 class="fs-1 fw-bold">
                    This what we do to the <span class="text-warning">comunity</span>
                </h1>

                <div class="row gap-3">
                    
                    <div class="col-lg what-we-do-card d-flex justify-content-center align-items-center p-4 gap-3">
                        <div>
                            <img src="data:image/png;base64,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">
                        </div>    
                        <div class="d-flex flex-column justify-content-center">
                            <h3 class="fw-bold">No-Comunity</h3>
                            <p>Not only Comunity. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, eaque! </p>
                        </div>
                    </div>
                    
                    <div class="col-lg what-we-do-card d-flex justify-content-center align-items-center p-4 gap-3">
                        <div>
                            <img src="data:image/png;base64,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">
                        </div>    
                        <div class="d-flex flex-column justify-content-center">
                            <h3 class="fw-bold">No-Comunity</h3>
                            <p>Not only Comunity. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, eaque! </p>
                        </div>
                    </div>      
                </div>
            </div>
        </div>

        {{-- what-we-do --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>