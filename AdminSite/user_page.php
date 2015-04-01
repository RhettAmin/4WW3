<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css" media="screen,projection"/>
    <title>Gleash - Admin_User</title>
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

        <!--***************** Add User ******************-->
        <ul class="collapsible z-depth-1-half grey lighten-2" style="padding-bottom: 10px; padding-top: 10px" data-collapsible="accordion">
          <li>
            <form action="user_push.php" method = "post" id="user" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Add User</strong></h4></div>
              <div class="collapsible-body">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="icon_fname" name="username" type="text" class="validate">
                    <label for="icon_fname" class="required">User Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="password" type="text" class="validate">
                    <label for="icon_fname" class="required">Password</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="email" type="text" class="validate">
                    <label for="icon_fname" class="required">Email</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="phone" type="text" class="validate">
                    <label for="icon_fname" class="required">Phone Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="fName" type="text" class="validate">
                    <label for="icon_fname" class="required">First Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="lName" type="text" class="validate">
                    <label for="icon_fname" class="required">Last Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="creditCard" type="text" class="validate">
                    <label for="icon_fname" class="required">Credit Card Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="city" type="text" class="validate">
                    <label for="icon_fname" class="required">City</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="province" type="text" class="validate">
                    <label for="icon_fname" class="required">Province</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="postalCode" type="text" class="validate">
                    <label for="icon_fname" class="required">Postal Code</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="street" type="text" class="validate">
                    <label for="icon_fname" class="required">Street</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="unit" type="text" class="validate">
                    <label for="icon_fname" class="required">Unit</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="houseNumber" type="text" class="validate">
                    <label for="icon_fname" class="required">House Number</label>
                  </div>
                  <!-- SUBMIT BUTTON -->
                  <div class="col s6 regis-buttons offset-s3">
                    <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </li>
          <!--***************** Edit User ****************-->
          <li>
            <form action="user_edit.php" method = "post" id="user" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Edit User</strong></h4></div>
              <div class="collapsible-body">
                <div class "row">
                  <div class="input-field col s12">
                    <input id="icon_fname" name="username" type="text" class="validate">
                    <label for="icon_fname" class="required">User Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="password" type="text" class="validate">
                    <label for="icon_fname" class="required">Password</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="email" type="text" class="validate">
                    <label for="icon_fname" class="required">Email</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="phone" type="text" class="validate">
                    <label for="icon_fname" class="required">Phone Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="fName" type="text" class="validate">
                    <label for="icon_fname" class="required">First Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="lName" type="text" class="validate">
                    <label for="icon_fname" class="required">Last Name</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="creditCard" type="text" class="validate">
                    <label for="icon_fname" class="required">Credit Card Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="city" type="text" class="validate">
                    <label for="icon_fname" class="required">City</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="province" type="text" class="validate">
                    <label for="icon_fname" class="required">Province</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="postalCode" type="text" class="validate">
                    <label for="icon_fname" class="required">Postal Code</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="street" type="text" class="validate">
                    <label for="icon_fname" class="required">Street</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="unit" type="text" class="validate">
                    <label for="icon_fname" class="required">Unit</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="houseNumber" type="text" class="validate">
                    <label for="icon_fname" class="required">House Number</label>
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
            <form action="user_delete.php" method = "post" id="user" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>Delete User</strong></h4></div>
              <div class="collapsible-body">  
                <div class="row">
                  <div class="input-field col s12">
                    <input id="icon_fname" name="username" type="text" class="validate">
                    <label for="icon_fname" class="required">User Name</label>
                  </div>
                  <div class="col s6 regis-buttons offset-s3">
                    <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Delete</button>
                  </div>
                </div>
              </div>
            </form>
          </li>
        <!--***************** Show Users ****************-->
          <li>  
            <section id="regis" class="card-panel z-depth-1-half container grey lighten-3">
              <div class="collapsible-header grey lighten-3"><h4><strong>All Users</strong></h4></div>
              <div class="collapsible-body grey lighten-3"><?php include "showusers.php" ?></div>
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
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="product_page.php">PRODUCT PAGE</a></li>
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