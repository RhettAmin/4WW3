<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"  media="screen,projection"/>
    <title>Gleash - Registration</title> 
  </head>

  <body class="grey lighten-4">

    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>


    <!--************* Main *************-->
    <main class="content">
    
      <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
        <img src="../../images/gleash_landscape.jpg" alt=""> 
      </section>

      <section id="regis" class="card-panel z-depth-1-half container grey lighten-4">
          <h4><strong>Registration</strong></h4>
          <hr>
          <label class="required">Red = Required</label>
          <form name="myForm" action="registration.php" method="post" id="regis_form" class="row card-panel z-depth-1 grey lighten-3">
  
              <!--************ NAME ******************-->
              <div class="input-field col s6">
                  <input name="firstName" id="icon_fname" type="text" class="validate">
                  <label for="icon_fname" class="required">First Name</label>
              </div>
              <div class="input-field col s6">
                <input name="lastName" id="icon_lname" type="text" class="validate">
                <label for="icon_lname" class="required">Last Name</label>
              </div>

              <!--************ CONTACT ******************-->
              <div class="input-field col s6">
                <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="Format: account@domain.ext">
                  <input name="email" id="icon_email" type="text" class="validate">
                  <label for="icon_email" class="required">Email</label>
                </div>
              </div>
              <div class="input-field col s6">
                <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="Format: 123-456-7890">
                  <input name="phoneNumber" id="icon_phone" type="tel" class="validate">
                  <label for="icon_phone" class="required">Phone Number</label>
                </div>
              </div>

              <!--************ ACCOUNT ******************-->
              <div class="input-field col s4">
                 <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="6 Characters min">
                  <input name="username" id="icon_user" name="username" type="text" class="validate">
                  <label for="icon_user" class="required">Username</label>
                </div>
              </div>
              <div class="input-field col s4">
               <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="6 Characters min">
                  <input name="password" id="icon_pass" type="password" class="validate">
                  <label for="icon_pass" class="required">Password</label>
                </div>
              </div>
              <div class="input-field col s4">
                <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="6 Characters min">
                  <input id="icon_cpass" type="password" class="validate">
                  <label for="icon_cpass" class="required">Confirm Password</label>
                </div>
              </div>

              <!--************ ADDRESS ******************-->
              <div class="input-field col s2">
                <input name="unit" id="icon_unit" type="number" class="validate">
                <label for="icon_unit">Unit #</label>
              </div>
              <div class="input-field col s2">
                <input name="houseNumber" id="icon_streetnum" type="number" class="validate">
                <label for="icon_streetnum" class="required">Street #</label>
              </div>
              <div class="input-field col s8">
                <input name="address" id="icon_streetname" type="text" class="validate">
                <label for="icon_streetname" class="required">Street Name</label>
              </div>

              <!--************ LOCATION ******************-->
              <div class="input-field col s5">
                <input name="city" id="icon_city" type="text" class="validate">
                <label for="icon_city" class="required">City</label>
              </div>
              <div class="input-field col s5">
                <input name="province" id="icon_province" type="text" class="validate">
                <label for="icon_province" class="required">Province</label>
              </div>
              <div class="input-field col s2">
                <div class="tooltipped" data-position="top" data-delay="25" data-tooltip="Format: 1a3 b5c">
                  <input name="postalCode" id="icon_postal" type="text" class="validate">
                  <label for="icon_postal" class="required">Postal Code</label>
                </div>
              </div>

              <!--********** BUTTONS **************-->
              <div class="col s3 offset-s3 regis-buttons">
               <input type="submit" name="action" value="Submit Form">
                
              </div>

              <div class="col s3 regis-buttons">
                <button id="reset" class="btn btn-color waves-effect waves-light" type="reset" name="action">Reset
                </button>
              </div>

          </form> <!-- END ROW -->
 
      </section>
    </main>

    <?php include "../includes/sidemenu.php" ?>

    <!--************* Footer *************-->

    <?php include "../includes/footer.php" ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="../../js/registration.js"></script>
  </body>
</html>
