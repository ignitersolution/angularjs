<!DOCTYPE html>
<html ng-app="app">
<head>
<title>Demo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.js"></script>
<script src="js/app.js"></script>
<style>
.tab-pane
{
padding:20px;

}
.tab-content
{
border: 1px solid #ddd;
}
</style>
</head>
<body style="width: 1100px; margin-left: auto;margin-right: auto;">

<div class="container">
<ul class="nav nav-tabs">
	<li class="active"><a href="#home">Basic Info</a></li>
	<li><a href="#menu1">Personal Info</a></li>
	<li><a href="#menu2">Educational Info</a></li>
	<li><a href="#menu3">Summary</a></li>
</ul>

<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<table>
	<tr>
		<td>First Name :</td>
		<td><input type="text" ng-model="firstName" size="30"></td>

	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" ng-model="lastName" size="30"></td>
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

<ul>
	<li>First Name : {{firstName}}</li>
	<li>Last Name : {{lastName}}</li>
	<li>Gender : {{gender}}</li>
</ul>
</div>
</div>
<hr>
<p class="act"><b>Active Tab</b>: <span></span></p>
<p class="prev"><b>Previous Tab</b>: <span></span></p>
</div>

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
