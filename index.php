<!doctype html>
 <html ng-app="app">
 <head>
 <script src="js/angular.js"></script>
 <script src="js/app.js"></script>
 <script src="components.js"></script>
   
 <link rel="stylesheet" href="css/bootstrap.css">
 </head>
 <body>
 <h2>Angular JS </h2>
 <div ng-controller="studentInfo">
  <tabs>
	<pane title="Localization">
		
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
						<td>
							<input type="radio" ng-model="gender" value="Male">M<br/>
							<input type="radio" ng-model="gender" value="Female">F
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input class="btn-primary" type="submit" value="add"></td>
					</tr>
				</table>
					
	</pane>
	<li>First Name  : {{firstName}}</li>
	<pane title="Personal Info">
		Personal info....
	</pane>
	
	<pane title="Summary">
		Summary
		<ul>
			<li ng-bind="firstName">First Name  : {{firstName}}</li>
			<li>Last Name 	: {{lastName}}</li>
			<li>Gender		: {{gender}}</li>
			<li>Gender		: {{690+27}}</li>
			</ul>
	</pane>
</tabs>
		</div>



 </body>
 </html>

