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
			              <th>Delete</th>
			          </tr>
			        </thead>

			        <tbody>
						<?php 
							include "../includes/connect.php";

							$username = $_SESSION['username'];
						 	$userCart = "Cart_" . $username;
						 	$totalCost;
						 	$user_ccard = mysql_query("SELECT creditCard FROM Users WHERE username='$username';");
							$creditCard = mysql_fetch_assoc($user_ccard);
							$cc = $creditCard['creditCard'];
							$cardblocked = substr_replace($cc, '************', 0, -4);

							$cart = mysql_query("SELECT * FROM $userCart;");
							while ($c = mysql_fetch_assoc($cart)) {
								$id = $c['pid'];
								$query = mysql_query("SELECT * FROM Products WHERE id=$id;");
								$r = mysql_fetch_assoc($query);
								$itemCost = $r['price']*$c['quantity'];
								$totalCost += $itemCost;
						    	echo 
									"<tr class=\"\">" .
											"<td width=\"18$\">" . $r['name'] . "</td>" .
											"<td width=\"16%\">$" . $r['price'] . "</td>" .
											"<td width=\"16%\">$" . $itemCost . "</td>" .
											"<td width=\"8%\"><input type=\"number\" name=\"" . $r['id'] . "\"  value=\"" . $c['quantity'] . "\"></td>" .
											"<td width=\"11%\">" . $r['quantity'] . "</td>" .
											"<td width=\"16%\"> 
												<button id=\"" . $r['id'] . "\" class=\"update btn waves-effect waves-light green lighten-2\">
													<i class=\"mdi-action-cached right\"></i>Update
												</button>
											</td>" .
											"<td width=\"16%\"> 
												<button id=\"" . $r['id'] . "\" class=\"delete btn waves-effect waves-light red lighten-2\">
													<i class=\"mdi-action-delete right\"></i>Delete
												</button>
											</td>" .
									"</tr>";
								        
							}
						?>
					</tbody>
				</table>
			</form>
			<br /><br />

			<div>
				<table>
					<tr>
						<?php
							echo 
								"<td width=\"13%\"></td>" .
								"<td width=\"17%\">Total: $" .$totalCost. "</td>" .
								"<td width=\"18%\"></td>" .
								"<td width=\"15%\">Card: " .$cardblocked. "</td>" .
								"<td width=\"20%\"></td>" .
								"<td width=\"16%\"><button id=\"confirmPayment\" class=\"col s2 offset-s1 confirm btn waves-effect waves-light green lighten-2\">
									<i class=\"mdi-action-done right\"></i>Confirm</button></td>";
						?>
					</tr>
				</table>
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


