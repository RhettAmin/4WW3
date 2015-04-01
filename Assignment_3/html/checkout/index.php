<!doctype html>
<html lang="en">
  <?php include"../includes/head.php";?>

  <body class="grey lighten-4">
    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>
    <a id="toTheMoon" class="to-the-moon btn-floating btn-large waves-effect waves-light red" href="#"><i class="mdi-hardware-keyboard-arrow-up"></i></a>


    <!--************* Main *************-->
    <main>
    	<section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
       		<img src="/~aminr4/A3/images/gleash_landscape.jpg"> 
      	</section>

      	<section class="card-panel container catalogue-card">
        	<h4><strong>Checkout</strong></h4>
			<p>Your Cart</p>
			<form>
				<table class="center bordered">
			        <thead>
			          <tr>
			              <th>Product Name</th>
			              <th>Price</th>
			              <th>TotalPrice</th>
			              <th>Quantity</th>
			              <th>In Stock</th>
			              <th>Update</th>
			          </tr>
			        </thead>

			        <tbody>
						<?php 
							$servername = "mysqlsrv2.cas.mcmaster.ca";
							$username = "woodmjm";
							$password = "1138343";
							$db = "woodmjm_db";

							// Create connection
							mysql_connect("$servername", "$username", "$password") or die(mysql_error());

							mysql_select_db("$db") or die(mysql_error());

							session_start();

						 	$userCart = "Cart_" . $_SESSION['username'];
						 	$totalCost;

							$cart = mysql_query("SELECT * FROM $userCart;");
							while ($c = mysql_fetch_assoc($cart)) {
								$id = $c['pid'];
								$query = mysql_query("SELECT * FROM Products WHERE id=$id;");
								$r = mysql_fetch_assoc($query);
								$itemCost = $r['price']*$c['quantity'];
								$totalCost += $itemCost;
						    	echo 
									"<tr class=\"\">" .
											"<td width=\"30$\">" . $r['name'] . "</td>" .
											"<td width=\"18%\">$" . $r['price'] . "</td>" .
											"<td width=\"22%\">$" . $itemCost . "</td>" .
											"<td width=\"7%\"><input type=\"number\" name=\"" . $r['id'] . "\"  value=\"" . $c['quantity'] . "\"></td>" .
											"<td width=\"8%\">" . $r['quantity'] . "</td>" .
											"<td width=\"15%\"> 
												<button id=\"" . $r['id'] . "\" class=\"update btn waves-effect waves-light green lighten-2\">
													<i class=\"mdi-action-cached right\"></i>Update
												</button>
											</td>" .
									"</tr>";
								        
							}
						?>
					</tbody>
				</table>
			</form>
			<br /><br />

			<div class="row">
				<?php
					echo 
						"<p class=\"col s2 offset-s5\">Total: $" .$totalCost. "</p>" .
						"<button id=\"confirmPayment\" class=\"col s2 offset-s3 btn waves-effect waves-light green lighten-2\">
							<i class=\"mdi-action-done right\"></i>Confirm</button>";
				?>
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
    <script type="text/javascript" src="/~aminr4/A3/js/updateCart.js"></script>
  </body>
</html>


