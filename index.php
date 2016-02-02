<!doctype html>
 <html ng-app="app">
 <head>
<title>Demo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.js"></script>
<script src="js/app.js"></script>  
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/app.main.css">
 <script>
	$(function () {
    $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $('a[href="' + $(this).attr('href') + '"]').tab('show');
    })
});
 </script>
 </head>
 <body>
 <header><h2>Angular JS </h2></header>
  
<div class="container">
<ul class="nav nav-tabs">
	<li class="active"><a href="#home">BASIC INFO</a></li>
	<li><a href="#menu1">PERSONAL INFO</a></li>
	<li><a href="#menu2">EDUCATIONAL INFO</a></li>
	<li><a href="#menu3">SUMMARY</a></li>
</ul>

<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<table class="basic_info">
	<tr>
		<td>First Name :</td>
		<td><input type="text" placeholder="First Name" ng-model="firstName" size="30"></td>

	</tr>
	<tr>
		<td>Last Name :</td>
		<td><input type="text" placeholder="Last Name" required pattern=".{2,}" ng-model="lastName" size="30"></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><input type="text" placeholder="Email"  required type="email" ng-model="email" size="30"></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" placeholder="Password" name="pwd" required pattern=".{2,}"  /></td>
    </tr>
    <tr>
		<td>Confirm Password :</td>
		<td><input placeholder="Check Password" name="chk" type="password" /></td>
	</tr>
	<tr>
		<td>Gender :</td>
		<td><input type="radio" ng-model="gender" value="Male">M<br />
		<input type="radio" ng-model="gender" value="Female">F</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn-primary" type="submit" value="add"></td>
	</tr>
</table>
</div>
<div id="menu1" class="tab-pane fade">
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div id="menu2" class="tab-pane fade">
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
accusantium doloremque laudantium, totam rem aperiam.</p>
</div>
<div id="menu3" class="tab-pane fade">
<?php  include('summary.php'); ?>

</div>
</div>
<hr>
<p class="act"><b>Active Tab</b>: <span></span></p>
<p class="prev"><b>Previous Tab</b>: <span></span></p>
</div>
<footer>
@Ashu
</footer>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();         // active tab
        var y = $(event.relatedTarget).text();  // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
    });
});
</script>
 </body>
 </html>

