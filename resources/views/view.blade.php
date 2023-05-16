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
  <div class="container-fluid px-0 sticky-top navbar-light ">

    <nav class="navbar navbar-expand-lg bg-white navbar ">
      <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#"><img src="images/logoo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <form class="d-flex ms-auto" role="search">
            <input class="form-control me-2 border-dark border-1 form_search" type="search" placeholder=" Country | Samsung Tablets" aria-label="Search">
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
  <div class="col-md-12 sm-12 row justify-content-between mt-3">

    {{-- Left --}}
    <div class="col-md-10 sm-8">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide6.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

    </div>

    {{-- Right --}}
    <div class="col-md-2 sm-4 border_righrt" style="background-color: #FE3D3D;">
       <p  style="text-align:center; width:150px; height:50x; min-height:50px; font-size:13px;" class="text-white mt-5 ">Do you have anything you want to sell?</p>
       <div  style="text-align:center;"><img src="images/baglogo.png" alt=""></div>
       <h3  style="text-align:center;"   class="text-white ">Start Selling</h3>
    </div>
  </div>
       {{--Filter Section--}}
       <div class="container-fluid mt-4 ">
        <div class="row">
          <div class="col-sm-3 col-md container-fluid ">
            <div class="container-fluid bg-white">
              <div class="container">
                <h3 class=" fw-2 ">Filter</h3>
                <hr>
              </div>
              <form action="" class="mt-4 ">
                Price Min <br>
                <input type="range" class="w-10  mt-0"><span class="w-10 mt-0 fs-6"><input type="price"></span>
                Price Max <br>
                <input type="range" class="w-10  mt-0"><span class="w-10 mt-0 fs-6"><input type="price"></span>
              </form>
              <div class="container-fluid mt-3 " style="background-color: #F6F8FC ; width: 270px; height:80px; box-shadow: 0px 4px 5px rgba(52, 52, 52, 0.05);">
                <h6>Product Condition</h6>
                <input type="button" value ="New"style="background-color:green;"><input type="button" value ="Fairly used" style="margin-left: 4px;">
              </div>
              <div class="container-fluid mt-3  position-relative bg-white">
                 <img src="images/baglogo.png" alt="" width="20px;" height="20px;" style=" position:absolute; top:10px; left:0"><h6 style="position:absolute; top:12px; left:45px;">Verified Seller</h6>
                  <div class="form-check form-switch ">
                    <input class="form-check-input  position-absolute end-0 top-50" type="checkbox" id="flexSwitchCheckDefault">
                  </div>
              </div>
              <div class="container-fluid mt-5; background_linear position-relative">
                <p class="text-white ms-5 pt-2"  style="text-align:center; width:150px; height:20px; min-height:20px; font-size:13px; marging-left:40px;">Do you have anything you want to sell?</p>
                <h3 class="text-white ms-3 pt-2"style="text-align:center;" >Start Selling</h3>
                <img src="images/baglogo.png" width="40px" height="40px" alt="" class="position-absolute start-10 bottom-50 top-10">

              </div>
            </div> 
          </div>
          <div class="col-md-9 ">
             <div>
              <h6  class="mb-0 select_product " >Select a Product Category <span class=" text-danger select_product">*</span></h4>
               <span><p  class="mt-0 select_product_choose">(Choose a category to filter your search)</p></span> 
             </div>
             <div class="container-fluid ms-0 row ms-0 mt-4">
               <div class="col-md-2 col-sm-4 div_produc">
                     <div class="product_img position-absolute"><img src="images/lap.png" alt=""style=" position:absolute top:50px; left:50px;" ></div>
                     <div class="bg-white div_white"></div>
                     <h5 class=" position-absolute text-center fiter-product">Smart Gadgets</h5>
               </div>
               <div class="col-md-2 col-sm-4 div_produc">
                     <div class="product_img position-absolute"><img src="images/car2.png" alt=""></div>
                     <div class="bg-white div_white"></div>
                     <h5 class=" position-absolute text-center fiter-product">Vehicles</h5>
              </div>
               <div class="col-md-2 col-sm-4 div_produc">
                     <div class="product_img position-absolute"><img src="images/house2.png" alt=""></div>
                     <div class="bg-white div_white"></div>
                     <h5 class=" position-absolute fiter-product text-center ">Landed Property</h5>
               </div>
               <div class="col-md-2 col-sm-4 div_produc">
                     <div class="product_img position-absolute"><img src="images/hang2.png" alt=""></div>
                     <div class="bg-white div_white"></div>
                     <h5 class=" position-absolute text-center fiter-product ">Fashion</h5>
               </div>
               <div class="col-md-2 col-sm-4 div_produc ">
                     <div class="product_img position-absolute"><img src="images/manwithfl.png" alt=""></div>
                     <div class="bg-white div_white"></div>
                     <h5 class=" position-absolute  text-center fiter-product">Jobs</h5>
               </div>
               <div class="col-md-2 col-sm-4 div_produc">
                  <div class="product_img position-absolute"><img src="images/flower.png" alt=""></div>
                  <div class="bg-white div_white"></div>
                  <h5 class=" position-absolute text-center fiter-product ">Beauty/Cosmetics</h5>
               </div>
              </div>
           {{-- Beginning of the cards    --}}
              <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-3 g-4 ms-auto">
                  <div class="col">
                    <div class="card  border-rounded">
                      <img src="images/img1.png" class="card-img-top border-rounded-top img-fluid" alt="...">
                      <p class="sold yellow_background fs-9">Sold 75</p>
                      <div class="card-body">
                        <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                        <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                        <div class="send">
                          <p class="send_offer">Send Offer</p>
                          <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                        </div>
                        <p class="review yellow_background fs-9 ">*4.2</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card  border-rounded">
                      <img src="images/img2.png" class="card-img-top border-rounded-top" alt="...">
                      <p class="sold yellow_background fs-9">Sold 75</p>
                      <div class="card-body">
                        <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                        <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                        <div class="send">
                          <p class="send_offer">Send Offer</p>
                          <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                        </div>
                        <p class="review yellow_background fs-9 ">*4.2</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card  border-rounded">
                      <img src="images/img3.png" class="card-img-top border-rounded-top" alt="...">
                      <p class="sold yellow_background fs-9">Sold 75</p>
                      <div class="card-body">
                        <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                        <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                        <div class="send">
                          <p class="send_offer">Send Offer</p>
                          <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                        </div>
                        <p class="review yellow_background fs-9 ">*4.2</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                {{-- second row --}}
                <div class="container-fluid  mt-3 ">
                  <div class="row row-cols-1 row-cols-md-3 g-4 ms-auto">
                    <div class="col">
                      <div class="card  border-rounded">
                        <img src="images/house3.png" class="card-img-top border-rounded-top" alt="...">
                        <p class="sold yellow_background fs-9">Sold 75</p>
                        <div class="card-body">
                          <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                          <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                          <div class="send">
                            <p class="send_offer">Send Offer</p>
                            <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                          </div>
                          <p class="review yellow_background fs-9 ">*4.2</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card  border-rounded">
                        <img src="images/img3.png" class="card-img-top border-rounded-top" alt="...">
                        <p class="sold yellow_background fs-9">Sold 75</p>
                        <div class="card-body">
                          <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                          <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                          <div class="send">
                            <p class="send_offer">Send Offer</p>
                            <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                          </div>
                          <p class="review yellow_background fs-9 ">*4.2</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card  border-rounded">
                        <img src="images/img2.png" class="card-img-top border-rounded-top" alt="...">
                        <p class="sold yellow_background fs-9">Sold 75</p>
                        <div class="card-body">
                          <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                          <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                          <div class="send">
                            <p class="send_offer">Send Offer</p>
                            <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                          </div>
                          <p class="review yellow_background fs-9 ">*4.2</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  {{-- third row --}}
                  <div class="container-fluid  mt-3 ">
                    <div class="row row-cols-1 row-cols-md-3 g-4 ms-auto">
                      <div class="col">
                        <div class="card  border-rounded">
                          <img src="images/img3.png" class="card-img-top border-rounded-top" alt="...">
                          <p class="sold yellow_background fs-9">Sold 75</p>
                          <div class="card-body">
                            <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                            <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                            <div class="send">
                              <p class="send_offer">Send Offer</p>
                              <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                            </div>
                            <p class="review yellow_background fs-9 ">*4.2</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card  border-rounded">
                          <img src="images/img2.png" class="card-img-top border-rounded-top" alt="...">
                          <p class="sold yellow_background fs-9">Sold 75</p>
                          <div class="card-body">
                            <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                            <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                            <div class="send">
                              <p class="send_offer">Send Offer</p>
                              <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                            </div>
                            <p class="review yellow_background fs-9 ">*4.2</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card  border-rounded">
                          <img src="images/img1.png" class="card-img-top border-rounded-top" alt="...">
                          <p class="sold yellow_background fs-9">Sold 75</p>
                          <div class="card-body">
                            <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                            <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                            <div class="send">
                              <p class="send_offer">Send Offer</p>
                              <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                            </div>
                            <p class="review yellow_background fs-9 ">*4.2</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    {{-- fouth row --}}
                    <div class="container-fluid  mt-3 ">
                      <div class="row row-cols-1 row-cols-md-3 g-4 ms-auto">
                        <div class="col">
                          <div class="card  border-rounded">
                            <img src="images/house3.png" class="card-img-top border-rounded-top" alt="...">
                            <p class="sold yellow_background fs-9">Sold 75</p>
                            <div class="card-body">
                              <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                              <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                              <div class="send">
                                <p class="send_offer">Send Offer</p>
                                <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                              </div>
                              <p class="review yellow_background fs-9 ">*4.2</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card  border-rounded">
                            <img src="images/img2.png" class="card-img-top border-rounded-top" alt="...">
                            <p class="sold yellow_background fs-9">Sold 75</p>
                            <div class="card-body">
                              <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                              <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                              <div class="send">
                                <p class="send_offer">Send Offer</p>
                                <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                              </div>
                              <p class="review yellow_background fs-9 ">*4.2</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card  border-rounded">
                            <img src="images/img3.png" class="card-img-top border-rounded-top" alt="...">
                            <p class="sold yellow_background fs-9">Sold 75</p>
                            <div class="card-body">
                              <h5 class="card-title text-danger">$3,999.00</h5><span><del class="delete" >$2,599.00</del></span>
                              <p class="card-text ">Infinix hot 5 (ultralight 5gb ram, 500mpi</p>
                              <div class="send">
                                <p class="send_offer">Send Offer</p>
                                <img src="images/baglogo.png" width="20px"height="20px" alt="" class="baglo">
                              </div>
                              <p class="review yellow_background fs-9 ">*4.2</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      {{-- PROMO SECTION --}}
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
              </div>
             </div>
          </div>
        </div>
      </div>
      
      
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>