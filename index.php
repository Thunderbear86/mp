<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Metaperspektiv</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-light">

<header>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>

</header>


<!-- Indhold -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carousel/identitet.jpeg" class="d-block w-100" alt="identitet">
            <div class="carousel-caption d-none d-md-block">
                <h5>Identitet</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/positionering.jpeg" class="d-block w-100" alt="positionering">
            <div class="carousel-caption d-none d-md-block">
                <h5>Positionering</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/team.jpeg" class="d-block w-100" alt="team">
            <div class="carousel-caption d-none d-md-block">
                <h5>Team</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<div class="container">
    <div class="row">
        <div>
            <h3>Identitet</h3>
                <div class="card shadow col-sm-12 col-md-8 col-lg-4">
                    <img class="card-img-top" src="img/baggrund%20v2.png" alt="test" />

                    <div class="card-body">
                        Tekst
                    </div>
                </div>
        </div>
        <h3>Positionering</h3>
            <div class="card shadow col-6">
                <div class="card-body">
                    Tekst
                </div>
            </div>
        <h3>Kultur</h3>
            <div class="card shadow">
                <div class="card-body">
                    Tekst
                </div>
            </div>
        <h3>Budskab & Tone</h3>
            <div class="card shadow">
                <div class="card-body">
                    Tekst
                </div>
            </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Identitet</h3>
        </div>
        <div class="col">
            <h3>Positionering</h3>
        </div>
        <div class="col">
            <h3>Kultur</h3>
        </div>
        <div class="col">
            <h3>Budskab & Tone</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>AI din virksomhed</h3>
        </div>
        <div class="col">
            <h3>Segmentering</h3>
        </div>
        <div class="col">
            <h3>Ledelses Coaching</h3>
        </div>
        <div class="col">
            <h3>Positiv forstærkning</h3>
        </div>
    </div>
</div>



<footer>
    <?php include 'footer.php'; ?>
</footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

