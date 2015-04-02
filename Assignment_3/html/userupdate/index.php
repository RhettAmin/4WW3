<!doctype html>
<html lang="en">
  <?php 
      include "../includes/head.php";
      include "../includes/connect.php";
  ?>

  <body class="grey lighten-4">
    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>


    <!--************* Main *************-->
    <main>
        <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
          <img src="/~aminr4/A3/images/gleash_landscape.jpg"> 
      	</section>

      	<section class="card-panel container catalogue-card">
        	<h4><strong>User Update</strong></h4>
    			<div class="card-panel grey lighten-3">
              <?php 

                  $username = $_SESSION['username'];

                  echo "<h3><strong>" .$username. "</strong></h3>";

              ?>  
              <div class="flow-text">
                  Fill in the field as needed, any field left blank will remain the same.
              </div>

              <form action="editAccount.php" method = "post" id="user" enctype="multipart/form-dat" class="card-panel z-depth-1-half container grey lighten-4">
                <p><h5>Personal</h5></p>
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
                    <input id="icon_fname" name="password" type="text" class="validate">
                    <label for="icon_fname" class="required">Password</label>
                  </div>
                </div>
                <p><h5>Account Details</h5></p>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="icon_fname" name="email" type="text" class="validate">
                    <label for="icon_fname" class="required">Email</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="creditCard" type="text" class="validate">
                    <label for="icon_fname" class="required">Credit Card Number</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="icon_fname" name="phone" type="tel" class="validate">
                    <label for="icon_fname" class="required">Phone Number</label>
                  </div>
                </div>
                <p><h5>Location</h5></p>
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
                <p><h5>Residential</h5></p>
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
            </form>

          </div>

    		</section>
    </main>

    <?php include "../includes/sidemenu.php" ?>

    <!--************* Footer *************-->
    <?php include "../includes/footer.php" ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/materialize.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/cart.js"></script>
  </body>
</html>

