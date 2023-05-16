<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product_upload</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style/market.css">
</head>
<body class="container-fluid px-0 body_background">
     {{-- Navbar --}}
  <div class="container-fluid px-0 sticky-top navbar-light ">

    <nav class="navbar navbar-expand-lg bg-white navbar ">
      <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#"><img src="images/logoo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <form class="d-flex ms-auto" role="search">
            <input class="form-control me-2 border-dark border-1 fw-bold font_size_form form_search " type="search" placeholder=" Search category" aria-label="Search">
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
  <div class="col-md-12 container mt-5 ">
    <div>
     <h6  class="mb-0 select_product " >Select a Product Category <span class=" text-danger select_product">*</span></h4>
      <span><p  class="mt-0 select_product_choose">(Choose a category to filter your search)</p></span> 
    </div>
    <div class="container-fluid row ms-0 mt-4">
      <div class="col-md col-sm-4 div_produc">
            <div class="product_img position-absolute"><img src="images/lap.png" alt=""style=" position:absolute top:50px; left:50px;" ></div>
            <div class="bg-white div_white"></div>
            <h5 class=" position-absolute text-center fiter-product">Smart Gadgets</h5>
      </div>
      <div class="col-md col-sm-4 div_produc">
            <div class="product_img position-absolute"><img src="images/car2.png" alt=""></div>
            <div class="bg-white div_white"></div>
            <h5 class=" position-absolute text-center fiter-product">Vehicles</h5>
     </div>
      <div class="col-md col-sm-4 div_produc">
            <div class="product_img position-absolute"><img src="images/house2.png" alt=""></div>
            <div class="bg-white div_white"></div>
            <h5 class=" position-absolute fiter-product text-center ">Landed Property</h5>
      </div>
      <div class="col-md col-sm-4 div_produc">
            <div class="product_img position-absolute"><img src="images/hang2.png" alt=""></div>
            <div class="bg-white div_white"></div>
            <h5 class=" position-absolute text-center fiter-product ">Fashion</h5>
      </div>
      <div class="col-md col-sm-4 div_produc ">
            <div class="product_img position-absolute"><img src="images/manwithfl.png" alt=""></div>
            <div class="bg-white div_white"></div>
            <h5 class=" position-absolute  text-center fiter-product">Jobs</h5>
      </div>
      <div class="col-md col-sm-4 div_produc">
         <div class="product_img position-absolute"><img src="images/flower.png" alt=""></div>
         <div class="bg-white div_white"></div>
         <h5 class=" position-absolute text-center fiter-product ">Beauty/Cosmetics</h5>
      </div>
      <div class="col-md col-sm-4 div_produc">
        <div class="product_img position-absolute"><img src="images/basket.png" alt=""></div>
        <div class="bg-white div_white"></div>
        <h5 class=" position-absolute text-center fiter-product ">Supermarkets</h5>
     </div>
     </div>
      {{-- Beginning of the form --}}
      
     <form class="row g-3 bg-white mt-2 shadow p-3 bg-body rounded justify-space-between mb-6">
       <div class="col-md-4 ">
        <h6>Add Photo</h6>
        <p class="w-auto " style="font-size: 12px; width:20px;">(Your first selected photo is your product Gig)</p>
        <div class=" border rounded border-dark border-1 form-control position-relative " style="width: 90%; height:200px; border-style: dotted;">
          <img src="images/camera.png" alt="" class="position-absolute"style="top:60px; left:100px;">
           <p class="position-absolute top-50 bottom-50 font_size_form">maximum size picture: <span style="color:#FE3D3D">5mb</span></p> 
           <p class="position-absolute font_size_form" style="top:110px">Supported format: <span style="color:#FE3D3D;">Jpg and Png</span></p>
        </div>

       </div>
       <div class="col-md-4">
        <input type="text" value="Location*" class="mt-5 rounded-2 form-control font_size_form ">
        <input type="text" value="Actual Selling Price*    |    Promo Price (optional) " class="mt-4 rounded-2 form-control font_size_form ">
        <input  class="mt-4 rounded-3 form-control font_size_form" type="text" value="How many copies of this product do you have in stock, suitable for wholesales(Optional)">
           <div class="d-flex mt-4">
            <label class="">Product Condition*</label>
            <input type="button" value="New" class="rounded-2 w-25 h-25 text-center ms-1 bg-white form-control font_size_form">
            <input type="button" value="Fairly Used" class="rounded-2 w-25 h-25 text-center ms-1 bg-white form-control font_size_form">
           </div>
           <div class="d-flex mt-4">
              <label class="w-75 h-25 ">Ask for price</label>
              <div class="form-check form-switch ">
                <input class="form-check-input me-0 form-control" type="checkbox" id="flexSwitchCheckDefault">
              </div>
           </div>
           <div class="d-flex mt-4">
            <label class="w-75 h-25 ">Negotiable</label>
            <div class="form-check form-switch ">
              <input class="form-check-input me-0 form-control" type="checkbox" id="flexSwitchCheckDefault">
            </div>
         </div>
       </div>
       <div class="col-md-4 ">
        <input type="text" value="Product tittle* " class="mt-5 rounded-2 form-control font_size_form">
        <input type="text area" value=" Product Description *" class="mt-4 rounded-2 form-control font_size_form " style="width: 90%; height:200px;">
        <div class="d-grid gap-2 col-sm-12 mx-auto">
          <button class="btn btn-primary  upload_product_button mt-4" type="button">
            <img src="images/baglogo.png" alt="" width="30px" height="30px">
            <p class="font_size_form ">Upload your Product</p>
          </button>
        </div>
       </div>
      </form>

    
</body>
</html>