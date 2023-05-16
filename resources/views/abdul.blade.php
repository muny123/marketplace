<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/market.css">
    <style>
        .child{
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .proimg{
            width: 150px;
            height: 150px; 
            /* z-index: -1;            */
        }
        .cam{
            position: absolute;
            left: 10px;
            top: 8px;
        }
        .camer{
            position: absolute;
            top: 80px;
            left: 200px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-color:white;
        }
        .pbut{
            margin-top: 50px;
            margin-left: 40px
        }
        .btn-one{
            background-color: transparent;
            border: 1px solid orangered;
            border-radius: 5px;
            margin-left: 220px;
            margin-top:
        }
    </style>
</head>
<body class="container-fluid px-0 body_background">
    <div class="container d-flex">
        <div class="child">
           <img src="images/profileimg.png" alt="" class="proimg">
        </div>
        <div class="camer">
            <img src="images/smallcam.png" alt="" class="cam">
           </div>
           <div class="pbut">
            <p><b>Upload your profile photo</b></p>
            <p>This helps visitor to recognize you and Buyandsell</p>
           </div>
           <div class="twobtn">
            <button class="btn-one">Become a verified <br> SELLER</button>
           </div>
    </div>
</body>
</html>