<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"  media="screen,projection"/>
    <title>Gleash - Catalogue</title>
  </head>

  <body class="grey lighten-4">
    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>
    <i id="goToCartPage" class="medium mdi-action-shopping-cart green-text text-lighten-2 goToCartPage"></i>
    <a id="toTheMoon" class="to-the-moon btn-floating btn-large waves-effect waves-light red" href="#"><i class="mdi-hardware-keyboard-arrow-up"></i></a>


    <!--************* Main *************-->
    <main>
    	  <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
        	<img src="../../images/gleash_landscape.jpg"> 
      	</section>
        <!--*********************** CATALOGUE ITEMS *****************************************--> 
        <section class="card-panel container catalogue-card">
          <h4><strong>Catalogue</strong></h4>
          <!--************* SEARCH *************-->
          <form class="row">
            <div class="input-field col s8">
              <input id="search-criteria" type="text" required>
              <label for="search-criteria"><i class="mdi-action-search"> Search</i></label>
            </div>
            <div class="col s4 regis-buttons">
              <button id="submit" class="btn btn-color waves-effect waves-light" name="action">Submit</button>
            </div>
          </form>


          
            <!--**************** ITEM 1 ********************-->
          
            <?php include "showproducts.php" ?>
            <!-- <div class="col s4 catalogue-items">
              <div class="row">
                <div class="col s12">
                  <div class="card">
                    
                    <div class="product-image">
                      <img class="materialboxed catalogue-images" src="../../images/leashes/l1.jpg" data-caption="Ram Rod">
                      <div class="ribbon-wrap"><div class="ribbon-red">SOLD OUT</div></div>
                    </div>
                    
                    <div class="card-content card-content-box blue-grey lighten-5">
                      <section class="card-title card-title-text black-text title">
                          <p>Ram Rod</p>
                      </section>
                      <label>Polyester</label>
                      <p>Description</p>
                    </div>

                    <div class="card-action card-details blue-grey lighten-4">
                      <div class="row card-details">
                          <p class="col s2">$199.99</p>
                          <input class="col s2 offset-s5 prod-num" type="text">
                          <i id="addToCart" class="small mdi-action-add-shopping-cart col s3"></i>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> -->

<!--*********************** END CATALOGUE ITEMS **************************************-->
    </main>

    <section class="sidemenu card-panel blue-grey lighten-5">
      <ul>
        <li id="brand" class="card green z-index-5">GLEASH</li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="index.html">HOME</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="#">CATALOGUE</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="contact.html">CONTACT US</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="reviews.html">REVIEWS</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="login.html">LOGIN</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="registration.html">REGISTER</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="sitemap.html">SITE MAP</a></li>
      </ul>
    </section>

    <!--************* Footer *************-->
    <footer class="page-footer foot">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Want to connect?</h5>
            <p class="grey-text text-lighten-4">Follow these links!</p>
	    <p class="grey-text text-lighten-4">(This site works best on Firefox and IE)</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="https://github.com/RhettAmin/ww3assn.git">Github</a></li>
              <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Materialize</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright foot-copy">
        <div class="container">
          © 2015 Copyright. Website by James Anthony and Rhett Amin
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="../../js/catalogue.js"></script>
  </body>
</html>

