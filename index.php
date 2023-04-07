<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hiranandani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <link rel="stylesheet" href="static/style.css">
    <script defer src="../static/script.js"></script>
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="m-100" src="./assets/logo.png" alt="Icon" width="60px" height="60px">
                </div>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show gap-3" id="navbarCollapse">
                <div class="navbar-nav ms-auto text-center fw-bold gap-3">
                    <a href=" #home" class="nav-item nav-link">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#projects" class="nav-item nav-link">Projects</a>
                    <a href="#amenities" class="nav-item nav-link">Amenities</a>
                    <a href="#price" class="nav-item nav-link">Price &amp; Breakups</a>
                    <a href="#plans" class="nav-item nav-link">Plans &amp; Layout</a>
                    <a href="#location" class="nav-item nav-link">Location</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="tel:+919004236116" class="btn btn-primary px-3 d-none d-lg-flex"
                    style="background-color: #a8926c; border: none">
                    +91 90042 36116
                </a>
            </div>
        </nav>
    </section>
    <section class="slider">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-5 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-2">
                    <span class="text-primary hero-heading">HIRANANDANI ESTATE,THANE</span>
                </h1>
                <h1 class="display-6 animated fadeIn mb-2">
                    <span class="text-secondary hero-price">₹52.50L* Onwards</span>
                </h1>
                <a data-bs-toggle="modal" data-bs-target="#site"
                    class="btn btn-primary py-3 px-5 me-3 animated fadeIn hero-btn">
                    Know More
                </a>
            </div>
            <div class="col-md-7 animated fadeIn">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/banner01.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/banner02.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/banner03.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="enquiry">
        <div class="search container-fluid mb-5  fadeIn"
            style=" padding: 35px; visibility: visible; background-color: #a8926c;">
            <div class="container">
                <form id="modalContactForm" method="post" action="contact.php">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="text-start mx-auto  slideInLeft">
                                <h4 style="color:#fff" class="mb-1">Enquire Now</h4>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" class="form-control border-0 py-3" name="name"
                                        placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="email" class="form-control border-0 py-3" name="email"
                                        placeholder="E-mail">
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" maxlength="10" class="form-control border-0 py-3" name="phone"
                                        placeholder="Mobile">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="geolocation" class="geolocation">
                        <input type="hidden" name="user_ip" class="user_ip">
                        <div class="col-md-2">
                            <button name="submit" type="submit" class="btn btn-dark border-0 w-100 py-3 enquiry-btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="About">
        <div id="about" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="./assets/about.jpeg">
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <h1 class="mb-4 main-heading">ABOUT HIRANANDANI ESTATE</h1>
                        <p class="mb-4">Hiranandani Estate is Thane’s the largest and finest township that balances
                            nature &amp; luxuries. The township offers total 7 towers named Athena, Barca, Solitaire B
                            &amp; C,
                            Senina, Canary, Cardinal and Eagleridge with 1, 2, 2.5 &amp; 3 BHK apartments. The Township
                            is Meticulously
                            planned to accommodate your way of life, these residences are designed to seamlessly blend
                            with the choices you make. It's time for your dreams to turn into reality with every inch
                            put to optimum use and every corner replicating smartness, the diligent planning makes sure
                            you don’t run out of comfortable moving space. You live the brilliance, every single day.
                            The interiors are designed to maximize functionality and the greenery, the accessibility,
                            the safety and the aspect of community living makes a perfect nest for your family.

                            Become a part of one of the most sought after living experience, feel the pride of belonging
                            to the community that many desire. Let the world class amenities, the iconic structure the
                            superior planning propel your lifestyle to level next at Hiranandani Estate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects ">
        <div id="projects" class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-8">
                        <div class="text-start mx-auto mb-5">
                            <h1 class="mb-3 main-heading">HIRANANDANI PROJECTS</h1>
                            <p>Hiranandani Estate is Thane’s the largest and finest township that balances nature &amp;
                                luxuries. The township offers total 7 towers named Athena, Barca, Solitaire B &amp; C,
                                Senina, Canary, Cardinal and Eagleridge with 1, 2, 2.5 &amp; 3 BHK apartments.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid property-item" src="./assets/cardinal.png" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            EAGLERIDGE
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="./assets/solitaire.jpeg" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            SOLITAIRE
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="./assets/EAGLERIDGE.jpeg" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            SOLUS
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="./assets/EAGLERIDGE.jpeg" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            SKYLARK ENCLAVE
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="./assets/lakeenlave.jpeg" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            LAKE ENCLAVE
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6  ">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="./assets/cardinal.png" alt="">
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            CARDINAL
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="amenities">
        <div id="amenities" class="container-xxl py-5">
            <div class="container">
                <div class="text-centermx-auto mb-5">
                    <h1 class="mb-3 main-heading">AMENITIES </h1>
                    <p>World class amenities at your door step.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-2 col-sm-4">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/aerobic.svg" alt="Icon">
                            </div>
                            <h6>Aerobic Zone</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/games.svg" alt="Icon">
                            </div>
                            <h6>Games Play Area</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class=" rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/garden.svg" alt="Icon">
                            </div>
                            <h6>Floral Garden</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 ">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/gymnasium.svg" alt="Icon">
                            </div>
                            <h6>Gymnasium Area</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/hall.svg" alt="Icon">
                            </div>
                            <h6>Community Hall</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 ">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/jacuzzi.svg" alt="Icon">
                            </div>
                            <h6>Jacuzzi Bath</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class=" rounded p-4" style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/kickboxing.svg" alt="Icon">
                            </div>
                            <h6>Kick Boxing</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4  ">
                        <div class="rounded p-4" style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/kidsplayarea.svg" alt="Icon">
                            </div>
                            <h6>Kids Play Area</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4  ">
                        <div class="rounded p-4" style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/party.svg" alt="Icon">
                            </div>
                            <h6>Dance Party Hall</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="rounded p-4"
                            style="display: flex; flex-direction: column; align-items: center;">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="./ameneties/spa.svg" alt="Icon">
                            </div>
                            <h6>SPA Relax Zone</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4" >
                        <div class=" rounded p-4"
                        style="display: flex; flex-direction: column; align-items: center;">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="./ameneties/swimmingpool.svg" alt="Icon">
                        </div>
                        <h6>Swimming Pool</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="rounded p-4" style="display: flex; flex-direction: column; align-items: center;">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="./ameneties/yoga.svg" alt="Icon">
                        </div>
                        <h6>Yoga Zone</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <img class=" img-fluid rounded w-100" src="./assets/banner.webp" alt="">
                            </div>
                            <div class="col-lg-6  fadeIn" data--delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3 main-heading">Contact With Us to Know More About</h1>
                                    <p>We will get back to you at earliest, that is what we assure for our best service
                                        at you one call away.</p>
                                </div>
                                <a data-bs-toggle="modal" data-bs-target="#site"
                                    class="btn btn-primary py-3 px-4 me-2 make-a-call-btn"><i class="fa fa-phone-alt me-2"></i>Make A
                                    Call</a>
                                <a data-bs-toggle="modal" data-bs-target="#site" class="btn btn-dark py-3 px-4 enquiry-btn"><i class="fa fa-calendar-alt me-2"></i>Get
                                    Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <div id="price" class="container-xxl py-5">
            <div class="container">
                <div>
                    <div class="text-start mx-auto mb-5  slideInLeft" ">
                        <h1 class=" mb-3 main-heading">PRICE &amp; BREAKUPS</h1>
                    </div>
                </div>
                <div class="row g-0 gx-5 align-items-start">
                    <div class="col-lg-8">
                        <div class="text-start text-lg-start"
                            style="visibility: visible;">
                            <ul class="nav nav-pills d-inline-flex justify-content-start mb-" style="grid-gap:8px">
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                        href="#eagleridge">Eagleridge</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill"
                                        href="#solitaire">Solitaire</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#lakeenlave">Lake
                                        Enlave</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#skylark">Skylark
                                        Enclave</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#solus">Solus</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill"
                                        href="#cardinal">Cardinal</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="eagleridge" class="tab-pane active p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6 ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">2 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 701 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 708 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.5 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 924 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.5 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 936 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1092 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="solitaire" class="tab-pane  p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6  ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 366 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1 BHK </td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 367 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 403 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 404 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="text-center">1 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 404 sq.
                                                                ft.</a>
                                                            </td>

                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                             <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 409 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">Studio 1</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 263 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Studio 2</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 314 sq.
                                                                ft.</a>
                                                            </td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="lakeenlave" class="tab-pane  p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6  ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">3 BHK Glenwood</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1195 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3 BHK Glenwood</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1196 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                             <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4 BHK Glendale</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1764 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4 BHK Glen Ridge</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1764 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="skylark" class="tab-pane  p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6  ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">2 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 799 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2 BHK </td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 838 sq.
                                                                ft.</a></td>

                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                             <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.5 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 950 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.5 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1015 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                             <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1094 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="solus" class="tab-pane  p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6  ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="6">SHOPS</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 323 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 355 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 359 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                            <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 376 sq.
                                                                ft.</a></td>

                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 377 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 406 sq.
                                                                ft.</a></td>

                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="cardinal" class="tab-pane  p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-md-6  ">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Carpet Area sqft</th>
                                                        <th class="text-center">Price Breakup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">2.5 BHK</td>
                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 902 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3 BHK </td>

                                                        <td class="text-center"><a data-bs-toggle="modal"
                                                                data-bs-target="#site" target="_blank"> 1324 sq.
                                                                ft.</a></td>
                                                        <td class="text-center"><a
                                                                style="padding: 5px 10px;color: #2E62A0;"
                                                                data-bs-toggle="modal" data-bs-target="#site"
                                                                target="_blank">
                                                                <b>Price Breakup</b></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" text-start text-lg-start slideInRight">
                        <h3 class="mb-3 main-heading">COSTING DETAILS</h3>
                    </div>
                    <img class="img-fluid rounded w-100" src="./assets/costing.jpeg" style="filter: blur(2px);" alt="">
                    <a data-bs-toggle="modal" data-bs-target="#site" class="btn btn-dark py-1 px-2 align-items-center enquiry-btn"
                        style="display: flex; flex-direction: row; justify-content: center;"><i
                        class="fa fa-bar-chart me-2 enquiry-btn"></i>GetCosting</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="location">
        <div id="location" class="container-xxl py-5">
            <div class="container">
                <div class="text-centermx-auto mb-5">
                    <h1 class="mb-3 main-heading">LOCATION HIGHLIGHTS</h1>
                    <p>Location that brings your needs together and close.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60265.20605462867!2d72.985677!3d19.257329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bbf2c465948f%3A0xc7f8b5e5d69854f1!2sHiranandani%20Estate%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1650679756360!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <h3 style="color: #2E62A0;font-weight: 800;">NEAR TO</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>TeJust 5 mins away is the Currae Gynaec IVF
                            Birthing Hospital</p>
                        <p><i class="fa fa-check text-primary me-3"></i>At the distance of 5 minutes is the New Horizon
                            Scholars School</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Drive Balkum Metro Station in just 10 minutes
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>The Byke Suraj Plaza is at a distance of 10
                            minutes</p>
                        <p><i class="fa fa-check text-primary me-3"></i> R Mall and High Street Mall is just at the
                            distance of 10 minutes</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Thaneone Corporate Business IT Park is just 15 minutes away</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div id="contact" class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5">
                    <h1 class="mb-3 main-heading">CONTACT US</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class=" " ">
                            <p class=" mb-4">Want to know more about Hiranandani Estate? Please fill the form and rest
                            we
                            will do for you.</p>
                            <form id="modalContactForm" method="post" action="contact.php">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="tel" maxlength="10" class="form-control" id="phone"
                                                name="phone" placeholder="Your Phone No.">
                                            <label for="phone">Phone No.</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="geolocation" class="geolocation">
                                    <input type="hidden" name="user_ip" class="user_ip">
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 make-a-call-btn" name="submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container footer">
            <div class="copyright">
                <div class="row">
                    <div style="font-size:0.7rem;" class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                        <b>Disclaimer : </b> We are an authorised marketing partner for this project. Provided content
                        is given by respective owners and this website and content is for information purpose only and
                        it does not constitute any offer to avail for any services. Prices mentioned are subject to
                        change without prior notice and properties mentioned are subject to availability. You can expect
                        a call, SMS or emails on details registered with us.
                    </div>
                    <div style="font-size:0.7rem;" class="col-md-12 text-center text-md-end mt-4">
                        <div class="footer-menu">
                            <a href="privacy-policy.php" target="_blank">Privacy Policy</a>
                            <a href="terms-and-conditions.php" target="_blank">Terms &amp; Conditions</a>
                            <a href="cookies-policy.php" target="_blank">Cookies Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</script>

</html>
