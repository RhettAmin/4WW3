<!doctype html>
<html>
  <?php 
      include "../includes/head.php"; 
      include "../includes/checklogin.php";
  ?>

  <body class="grey lighten-4">

    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>


    <!--************* Main *************-->
    <main class="content">
    
      <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
        <img src="../../images/gleash_landscape.jpg"> 
      </section>

      <section id="about-us" class="card-panel z-depth-1-half container grey lighten-4">
          <div class="flow-text">
            <header><h4><strong>Reviews</strong></h4></header>
            <section>
              <p>
                Leave a review in the area below, and use the slider to give us a rating!
              </p>
            </section>
          </div>

          <!--************ WRITE A REVIEW CARD ************-->
          <form action="reviewpush.php"  method="post" id="review" class="card-panel z-depth-1 grey lighten-3">
              <!-- REVIEW INPUT FIELD -->
              <div class="row">
                <div class="col s6 offset-s3">
                  <p class="grey-text"><Strong>Product Name</Strong></p>
                  <select name="productname" class="browser-default">
                    <!-- <option value="Anaconda">Anaconda</option>
                    <option value="Blue Wave">Blue Wave</option>
                    <option value="Classic Ropey">Classic Ropey</option>
                    <option value="Devilishly Prada">Devilishly Prada</option>
                    <option value="Fisher">Fisher</option>
                    <option value="Monkey Fist">Monkey Fist</option>
                    <option value="Ocean Breeze">Ocean Breeze</option>
                    <option value="OJ Gleash">OJ Gleash</option>
                    <option value="Old Duster">Old Duster</option>
                    <option value="Purple Haze">Purple Haze</option>
                    <option value="Ram Rod">Ram Rod</option>
                    <option value="Red Rocket">Red Rocket</option>
                    <option value="Restrainer">Restrainer</option>
                    <option value="Silverado">Silverado</option>
                    <option value="The Patriot">The Patriot</option> -->

                    <?php 
                        include "../includes/connect.php";

                        $username = $_SESSION['username'];

                        $query = mysql_query("SELECT DISTINCT name FROM Products LEFT JOIN Transaction ON Products.id=Transaction.productID WHERE Transaction.username='$username'");

                        while ($row = mysql_fetch_assoc($query)) {
                          $r = $row['name'];
                          echo "<option value=\"" .$r. "\">" .$r. "</option>";
                        }


                    ?>
                    
                  </select>
                </div>

              <div class="input-field col s6 offset-s3">
                <textarea id="textarea1" name="reviewtext" class="materialize-textarea"></textarea>
                <label for="textarea1">Write your review</label>
              </div>
            </div>
            <!-- RATING SLIDER -->
            <div class="row">
              <p class="col s1 offset-s3 slide-1">1</p>
              <div class="range-field col s4">
                <input type="range" id="slider" name="rating" min="1" max="5"/>
              </div>
              <p class="col s1">5</p>
              <!-- SUBMIT BUTTON -->
              <div class="col s6 regis-buttons offset-s3">
                <button type="submit" class="btn btn-color waves-effect waves-light" name="action">Submit</button>
              </div>
            </div>
          </form>
      </section>
    </main>

    <!--************* sidenav *************-->
    <?php include "../includes/sidemenu.php" ?>

    <!--************* Footer *************-->
    <?php include "../includes/footer.php" ?>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="../../js/reviews.js"></script>
  </body>
</html>
        
