<!doctype html>
<html>
  <?php include "../includes/head.php";?>

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
              <?php  include "showreviews.php" ?>
            </div>
        </div>
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
    <script type="text/javascript" src="../../js/allreviews.js"></script>
  </body>
</html>



          
 
   