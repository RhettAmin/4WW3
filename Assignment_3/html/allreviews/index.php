<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"  media="screen,projection"/>
    <title>Gleash - Show Reviews</title> 

    <?php
      $servername = "mysqlsrv2.cas.mcmaster.ca";
      $username = "woodmjm";
      $password = "1138343";
      $db = "woodmjm_db";
      $table = "Reviews";
      $prodArray = array("Ram Rod", "Rocket", "Devishly Prada");

      mysql_connect("$servername", "$username", "$password") or die(mysql_error());

      mysql_select_db("$db") or die(mysql_error());

    ?>
  </head>

  <body class="grey lighten-4">

    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>


    <!--************* Main *************-->
    <main class="content">
    
      <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
        <img src="../../images/gleash_landscape.jpg" alt=""> 
      </section>

      <section id="regis" class="card-panel z-depth-1-half container grey lighten-4">
          <h4><strong>All Reviews</strong></h4>
         
          <div class="card-panel z-depth-1-half grey lighten-3">
            <div class='row allreviews-card'>

              <?php   
                foreach ($prodArray as $pa) {

                  $result = mysql_query("SELECT * FROM Reviews WHERE productName=$pa") or die(mysql_error());
                  $avg = mysql_query("SELECT AVG(rating) FROM Reviews WHERE productName=$pa") or die(mysql_error());
                  $a = mysql_fetch_array($avg);
                  
                  echo 
                    "<div class=\"card-panel addMargin-side col s5-5 grey lighten-4 \" >" .
                        "<div><h5>".$pa."</h5></div>" .
                         "<div class=\"row\">";
                            echo "<div class=\"range-field col s10 offset-s1\"><input type=\"range\" id=\"slider\" min=\"1\" max=\"5\"value=\"".
                                $a['AVG(rating)']."\" disabled=\"disabled\"/></div>" .
                                "</div>";
                          
                  echo "</div>";
                  
                      "<div class=\"subreviews\">";
                  
                  while ($r = mysql_fetch_assoc($result)) {
                    echo 
                      "<div class=\"card-panel row allreviews-userreviews grey lighten-3\">" .
                        "<p class=\"review-title col s6\">".$r['username']."</p>" .
                        "<div class=\"range-field col s6 subrating\"><input type=\"range\" id=\"slider\" min=\"1\" max=\"5\"value=\"".
                                $r['rating']."\" disabled=\"disabled\"/></div>" .
                        "<p class=\"col s12\">".$r['review']."</p>" .
                      "</div>";
                  }
                    
                    echo "</div></div>";
                    
                }
                mysql_close();
               ?>
           <!--
            <div class="row allreviews-card">
              <div class="col s4">
                <p class="review-title">Ram Rod</p>
                <p>Total Rating goes here</p>
                <p>Polyester</p>
                <p>$199.99</p>
              </div>
              <div class="col s8 subreviews">
                <div class="card-panel grey lighten-5">
                  <p >Rating</p>
                </div>
                <div class="card-panel grey lighten-5">
                  <p >Rating</p>
                </div>
                <div class="card-panel grey lighten-5">
                  <p >Rating</p>
                </div>
              </div>
            </div>
            -->
            </div>
        </div>
      </section>
    </main>

    <!--************* sidenav *************-->
    <section class="sidemenu card-panel blue-grey lighten-5">
      <ul>
        <li id="brand" class="card green z-index-5">GLEASH</li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="index.html">HOME</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="catalogue.html">CATALOGUE</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="contact.html">CONTACT US</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="reviews.html">REVIEWS</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="login.html">LOGIN</a></li>
        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="#">REGISTER</a></li>
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
    <script type="text/javascript" src="../../js/allreviews.js"></script>
  </body>
</html>



          
 
   