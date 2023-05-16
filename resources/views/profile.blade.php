<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile settings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/market.css">
</head>
<body class="container-fluid px-0 body_background">
    <form class="g-3 container">
    <div class="row ms-5">
        <div class="col-md-8 me-4 mt-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control border-warning" id="inputusername" placeholder="This is your profile display name on buyandsell">
        </div>
        <div class="col-auto mt-5">
            <button type="submit" class="btn btn-secondary ">Edit</button>
          </div>
    </div>
    <div class="row ms-5">
        <div class="col-md-8 me-4 mt-3">
          <label for="username" class="form-label">Call Phone Number</label>
          <input type="text" class="form-control border-warning" id="inputphonenum" placeholder="This contact will be used by visitor on buyandsell to reach you via phone call">
        </div>
        <div class="col-auto mt-5">
            <button type="submit" class="btn btn-secondary">Edit</button>
          </div>
    </div>
    <div class="row ms-5">
        <div class="col-md-8 me-4 mt-3">
          <label for="username" class="form-label">WhatsApp Phone Link </label>
          <input type="text" class="form-control border-warning" id="inputwatsapplink" placeholder="This link will be used by visitors on buyandsell to reach on watsapp">
        </div>
        <div class="col-auto mt-5">
            <button type="submit" class="btn btn-secondary">Edit</button>
          </div>
    </div>
    <div class="container row mt-5 ms-5">
        <div class="form-check col">
            <input class="form-check-input border-warning " type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
            Location
            </label>
        </div>
          <label class="form-check-label" for="gridCheck">
            Turn on location
          </label>
          <div class="col-auto mt-3 ">
            <button type="submit" class="btn btn-warning">Save </button>
          </div>
        
    </div>
   
      </form>
    
</body>
</html>