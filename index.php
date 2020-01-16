<?php 
  require_once('dao/config.php');
  require_once('dao/crudDAO.php');

  $a = new crudDAO();
  $list=$a->index();
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Online Cat for Sale</title>
    

  <!--  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">-->
<link rel="stylesheet" href="../onlines_selling/bootstrap4/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div  class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
     <img style="width: 150px; " src="logo.png">
      <h5 style="color: green;" class="my-0 mr-md-auto font-weight-normal">PetShop </h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark " href="#Featured">Features</a>
        <a class="p-2 text-dark" href="#review">Reviews</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="signup.php">Sign up</a>
      <a style="margin-left: 4px;" class="btn btn-outline-primary" href="login.php">Log in</a>
    </div>

    <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 style="color:black;font-family: cursive;" class="display-4">Domesticated Cats for Sale</h1>
      <h3 style="color: #333;font-family: courier;" class="lead">Cats/Kitten for Sale to be added new to your family!</h3>
    </div>
   
    <br>

     <div  class="container">
      <div class="card-deck mb-3 text-center">
      <?php foreach($list as $key=>$value){ ?>
       <div class="card mb-4 box-shadow">
          <div class="card-header">
          <?php echo $value['catdesc']; ?>
          </div>
         <div  class="card-body">
          <?php $imgURL = "uploads/".$value['file_name']; ?>
          <img  src="<?php echo "$imgURL"; ?>" width ="200" height ="200">
            <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <h3><?php echo"$" .$value['price']." "; ?></h3>
              <li><?php echo $value['itemdesc']; ?></li>
              <li><?php echo $value['old']; ?></li>
              <li><?php echo $value['other_info']; ?></li>

              <li></li>
            </ul>
            <button s type="button" class="btn btn-lg btn-block btn-primary">Add to cart</button>
            </div>
          </div>
            <?php } ?>
           </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
       <!-- <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted"></small>
          </div>-->
          <div class="col-6 col-md">
           <!--
            <center><h1 id="Featured">Featured Cats for the week</h1></center>
          
            <img src="feat13.png">
            
             <ul class="list-unstyled text-small">
             <li>Mexican Black Kingsnake</li>
              <li>Species:Lampropeltis getula nigrita</li>
              <li>SKU:A4708.</li>
              <li>Length:12-14 inches</li>
              <li>Diet:rodents</li>
              <li>Categories:Colubrids, Exotic Pets, Kingsnakes, Snakes.</li>
              <img style="margin-left: 600px; margin-top: -600px;" src="feat21.png">
                <ul style="margin-left: 600px; margin-top: -165px;" class="list-unstyled text-small">
             <li>Adult Russian Tortoise</li>
              <li>Species:Agrionemys horsfeldii</li>
              <li>Length:5-8 inches</li>
              <li>Diet:vegetation</li>
              <li>SKU:A5108.</li>
              <li>Categories:Exotic Pets, Tortoises.</li>
          -->
            
          </div>
          <div class="col-6 col-md">
          <center> <h1 id="review">Reviews</h1></center>
            <ul class="list-unstyled text-small">
             
              <li>kassrodriguez11 – February 7, 2019:</li>
              <li>I ordered an anaconda as my second Hognose from flckr. He came healthy and calm, just like my first Hognose. His pattern is also much more beautiful than I thought it would be. I definitely think flckr have very fair prices. When I am ready for another Hognose I will always come back to flckrreptiles.com</li>
             
             <br> <li>Nik Kulcsar - December 19, 2019</li>
              <li>Snake arrived on time and packaged very well! thank you...</li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Support</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
           <div class="col-6 col-md">
            <h5>Pricing</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
