<!doctype html>
<html lang="en">
  <?php include "../includes/head.php" ?>

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
          <?php include "searchbar.php" ?>

          <!--**************** ITEMS ********************-->
          <?php include "showproducts.php" ?>

<!--*********************** END CATALOGUE ITEMS **************************************-->
    </main>

    <?php include "../includes/sidemenu.php" ?>

    <!--************* Footer *************-->
    <?php include "../includes/footer.php" ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="../../js/catalogue.js"></script>
  </body>
</html>

