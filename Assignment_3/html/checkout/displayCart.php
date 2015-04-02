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
								"<td width=\"16$\">" . $r['name'] . "</td>" .
								"<td width=\"12%\">$" . $r['price'] . "</td>" .
								"<td width=\"12%\">$" . $itemCost . "</td>" .
								"<td width=\"8%\"><input type=\"number\" name=\"" . $r['id'] . "\"  value=\"" . $c['quantity'] . "\"></td>" .
								"<td width=\"11%\">" . $r['quantity'] . "</td>" .
								"<td width=\"21%\"> 
									<button id=\"" . $r['id'] . "\" class=\"update btn waves-effect waves-light green lighten-2\">
										<i class=\"mdi-action-cached right\"></i>Update
									</button>
								</td>" .
								"<td width=\"21%\"> 
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
					"<td width=\"14%\"></td>" .
					"<td width=\"13%\">Total: $" .$totalCost. "</td>" .
					"<td width=\"17%\"></td>" .
					"<td width=\"20%\">Card: " .$cardblocked. "</td>" .
					"<td width=\"15%\"></td>" .
					"<td width=\"20%\"><button id=\"confirmPayment\" class=\"col s2 offset-s1 confirm btn waves-effect waves-light green lighten-2\">
						<i class=\"mdi-action-done right\"></i>Confirm</button></td>";
			?>
		</tr>
	</table>
</div>