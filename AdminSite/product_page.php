<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css" media="screen,projection"/>
    <title>Gleash - Admin_Product</title>
  </head>

  <body class="grey lighten-4">

    <div class="page-wrap">
      <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>

      <!--******************* Main ***********************-->
      <main class="content">
        <!--***************** Banner *********************-->
        <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
  	       <img src="images/gleash_landscape.jpg" alt="">
        </section>

        <!--***************** Add Product ******************-->
        <ul class="collapsible z-depth-1-half grey lighten-2" style="padding-bottom: 10px; padding-top: 10px" data-collapsible="accordion">
          <li>
            <form action="product_push.php" method = "post" id="product" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Add Product</strong></h4></div>
              <div class="collapsible-body">  
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="name" type="text" class="validate">
                    <label for="icon_fname" class="required">Product Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="id" type="text" class="validate">
                    <label for="icon_fname" class="required">Product ID</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="material" type="text" class="validate">
                    <label for="icon_fname" class="required">Material</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="price" type="text" class="validate">
                    <label for="icon_fname" class="required">Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="quantity" type="text" class="validate">
                    <label for="icon_fname" class="required">Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="description" type="text" class="validate">
                    <label for="icon_fname" class="required">Description</label>
                  </div>
                  <!-- SUBMIT BUTTON -->
                  <div class="col s6 regis-buttons offset-s3">
                    <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </li>
          <!--***************** Edit Product ****************-->
          <li>
            <form action="product_edit.php" method = "post" id="product" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Edit Product</strong></h4></div>
              <div class="collapsible-body">  
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="name" type="text" class="validate">
                    <label for="icon_fname" class="required">Product Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="id" type="text" class="validate">
                    <label for="icon_fname" class="required">Product ID</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="material" type="text" class="validate">
                    <label for="icon_fname" class="required">Material</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="price" type="text" class="validate">
                    <label for="icon_fname" class="required">Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="quantity" type="text" class="validate">
                    <label for="icon_fname" class="required">Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="description" type="text" class="validate">
                    <label for="icon_fname" class="required">Description</label>
                  </div>
                  <!-- SUBMIT BUTTON -->
                  <div class="col s6 regis-buttons offset-s3">
                    <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </li>
        <!--***************** Delete User ****************-->
          <li>
            <form action="product_delete.php" method = "post" id="product" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Delete Product</strong></h4></div>
              <div class="collapsible-body">  
                <div class="row">
                  <div class="input-field col s12">
                    <input id="icon_fname" name="id" type="text" class="validate">
                    <label for="icon_fname" class="required">Product ID</label>
                  </div>
                  <div class="col s6 regis-buttons offset-s3">
                    <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Delete</button>
                  </div>
                </div>
              </div>
            </form>
          </li>
        <!--***************** Show Products ****************-->
          <li>
            <section id="regis" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>All Products</strong></h4></div>
              <div class="collapsible-body grey lighten-3"><?php include "showproducts.php" ?></div>
            </section>
          </li>
        </ul>
      </main>
    </div>
    <!--********************** Side Menu **************-->
    <section class="sidemenu card-panel blue-grey lighten-5">
      <ul>
        <li id="brand" class="card green z-index-5">GLEASH</li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="index.html">MAIN PAGE</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="user_page.php">USER PAGE</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="admin_logout.html">LOGOUT</a></li>
      </ul>
    </section>
    
    
    <!--******************** Footer *******************-->
    <footer class="page-footer foot">
      <div class="container">
        © 2015 Copyright. Website by James Anthony, Mathew Wood, and Rhett Amin
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="js/redirect.js"></script>
  </body>
</html>
