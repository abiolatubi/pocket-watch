<!DOCTYPE html>
<html>
<head>
	<title>Responsive Navigation Demo</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jsapi"></script>
<script src="gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url('gfdynamicfeedcontrol.css');

#feedControl {
margin-top : 10px;
margin-left: auto;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>
<script type="text/javascript">
function load() {
var feed ="http://feeds.bbci.co.uk/news/world/rss.xml";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="normalize.css">
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body>
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="index.html">Home</a></li>
			<li><a href="Stock.html">Stock</a></li>
			<li><a href="Comment.html">Comment</a></li>
			<li><a href="Contact.html">Contact</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
	
	<div id="divMiddle">
		<p><strong style="font-family:Calibri">Welcome to Antique Pocket Watch Collector</strong></p>
		
		<p style="font-size: 0.8em">Buying  antique pocket watches sometimes is a lot to 
		do with personal choice where as some people prefer to collect dollar pocket 
		watches, others enjoy high end such as patek phillipe.
		</p>
<div>

<?php
$con = mysql_connect("http://sql3.freesqldatabase.com:3306","sql339542","aQ6*cA1%");

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

</div>

	</div>
	<div id="divFooter">
<div id="feedControl">Loading...</div>	
	</div>
		

	


</body>
</html>