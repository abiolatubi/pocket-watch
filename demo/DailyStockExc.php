<?php
$con = mysql_connect("sql3.freesqldatabase.com:3306","sql339542","aQ6*cA1%");

// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }

mysql_select_db("sql339542",$con);
  
  $result = mysql_query("SELECT * FROM stock_stat");


  
  echo "<table border='1'>
		<tr>
		<th>id</th>
		<th>Company</th>
		<th>Company value (€)</th>
		<th>Change (%)</th>
		<th>Price (€)</th>
		</tr>";
  
while($row = mysql_fetch_assoc($result))
    {
  echo "<tr>";
  echo "<td>" . $row['company_id'] . "</td>";
  echo "<td>" . $row['company_symbol'] . "</td>";
  echo "<td>" . $row['market_cap'] . "</td>";
  echo "<td>" . $row['market_change'] . "</td>";
  echo "<td>" . $row['share_price'] . "</td>";
  echo "</tr>";
  
  
  }
echo "</table>";

mysql_close($con);
?> 