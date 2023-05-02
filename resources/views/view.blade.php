<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style/market.css">
</head>
<body class="container-fluid px-0 body_background">

  {{-- Navbar --}}
  <div class="container-fluid px-0">

    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#"><span class="text-warning">Buy</span>a<span><img width="20px" height="20px" src="images/baglogo.png" alt=""></span>d<span class="text-secondary">sell</span><br><p class="fw-normal fs-6 text-center">marketplace</p> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <form class="d-flex ms-auto" role="search">
            <input class="form-control me-2" type="search" placeholder=" Country | Samsung Tablets" aria-label="Search">
            <button class="btn btn-outline-warning text-black yellow_background" type="submit">Search</button>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><img src="images/signup2.png" alt=""></a>
            </li>
            <li class="nav-item">
              <a style="background-color: #D2D2D2;" class="nav-link active btn rounded-circle" aria-current="page" href="#">You</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

  </div>


  {{-- My Carousel --}}
  <div class="col-12 row justify-content-between mt-3">

    {{-- Left --}}
    <div class="col-sm-9">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/caro1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/caro2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/caro3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/caro4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/caro5.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

    </div>

    {{-- Right --}}
    <div class="col-sm-3" style="background-color: #FE3D3D;">
      <h2>Testing</h2>
    </div>
  </div>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>