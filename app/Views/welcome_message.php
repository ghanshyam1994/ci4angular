<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is angular datasample by GHANSHYAM SAINI</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	
	
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>


</header>

<!-- CONTENT -->

<section>

	<h1>All sample employs data</h1>
	<div ng-app="myApp" ng-controller="customersCtrl"> 
		<br><br>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnewemploy">
	  Add new employ
	</button>
	Search <input type="text" ng-model="search" 
            placeholder="Enter some text to search" />
	
			<br><br>
		<table class="table table-dark table-striped">
		<tr>
		
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Salary</td>
			<td>Date of join</td>			
			<td>Dob</td>
			<td>Action</td>
			
		  </tr>
		  <tr ng-repeat="employ in employs | filter : search">
		 
			<td>{{ employ.id }}</td>
			<td>{{ employ.Name }}</td>
			<td>{{ employ.email }}</td>
			<td>{{ employ.salary }}</td>
			<td>{{ employ.date_of_join }}</td>
			<td>{{ employ.dob }}</td>
			<td>
				<button type="button" data-id="{{ employ.id }}" ng-click="select(employ)" class="btn btn-info">View</button>
				<button type="button" data-id="{{ employ.id }}" ng-click="editdetails(employ)" class="btn btn-success">Edit</button>
				<button type="button" data-id="{{ employ.id }}" ng-click="deleteForm(employ.id)" class="btn btn-danger">Delete</button>
			</td>
			
		  </tr>
		</table>

		<div class="modal fade" id="editemploy" tabindex="-1" aria-labelledby="editemployModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editemployModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" ng-show="selectedItem" ng-repeat="Item in selectedItem">						
						<form class="row g-3" >	
						<input type="hidden" class="form-control" id="Name" ng-model="upemploy.id" value="{{ Item.id }} " placeholder="Name" required>		
							<div class="col-auto">
								<label for="inputPassword2" class="visually-hidden">Name</label>
								<input type="text" class="form-control" id="Name" ng-model="upemploy.Name" value="{{ Item.Name }}" placeholder="Name" required>
							</div>
							<div class="col-auto">
								<label for="inputPassword2" class="visually-hidden">Email</label>
								<input type="text" class="form-control" id="Email" ng-model="upemploy.Email" value="{{ Item.email }}" placeholder="Email" required>
							</div>
							<div class="col-auto">
								<label for="inputPassword2" class="visually-hidden">Salary</label>
								<input type="number" class="form-control" id="Salary" ng-model="upemploy.Salary" value="{{ Item.salary }}" placeholder="Salary" required>
							</div>
							<div class="col-auto">
								<label for="inputPassword2" class="visually-hidden">Date of join</label>
								<input type="date" class="form-control" id="d_o_j" ng-model="upemploy.d_o_j" value="{{ Item.date_of_join }}" placeholder="Date of join" required>
							</div>
							<div class="col-auto">
								<label for="inputPassword2" class="visually-hidden">D.O.B.</label>
								<input type="date" class="form-control" id="dob" ng-model="upemploy.dob" value="{{ Item.dob }}" placeholder="D.O.B." required>
							</div>
							<div class="col-auto">
							<button type="reset" class="btn btn-primary mb-3" ng-click="resetForm()" value="Reset" >Reset</button>
								<button type="submit" class="btn btn-primary mb-3" ng-click="updateForm(upemploy,Item.id)">Save Detais</button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>      
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="employdetails" tabindex="-1" aria-labelledby="employdetailsModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="employdetailsModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" ng-show="selectedItem" ng-repeat="Item in selectedItem">						
						<div >
							<span >ID         </span> <span >       {{ Item.id }}</span></div><div >
							<span >Name       </span> <span >        {{ Item.Name }}</span></div><div >
							<span>Email      </span> <span >         {{ Item.email }}</span></div><div >
							<span>Salary      </span> <span >        {{ Item.salary }}</span></div><div >
							<span>Date of join  </span> <span >      {{ Item.date_of_join }}</span>		</div><div >	
							<span>Dob       </span> <span >          {{ Item.dob }}</span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>        
					</div>
				</div>
			</div>
		</div>

	
		<div class="modal fade" id="addnewemploy" tabindex="-1" aria-labelledby="addnewemployModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addnewemployModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">		
					<form class="row g-3" ng-submit="submitForm()">			
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">Name</label>
							<input type="text" class="form-control" id="Name" ng-model="employ.Name" placeholder="Name" required>
						</div>
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">Email</label>
							<input type="text" class="form-control" id="Email" ng-model="employ.Email" placeholder="Email" required>
						</div>
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">Salary</label>
							<input type="number" class="form-control" id="Salary" ng-model="employ.Salary" placeholder="Salary" required>
						</div>
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">Date of join</label>
							<input type="date" class="form-control" id="d_o_j" ng-model="employ.d_o_j" placeholder="Date of join" required>
						</div>
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">D.O.B.</label>
							<input type="date" class="form-control" id="dob" ng-model="employ.dob" placeholder="D.O.B." required>
						</div>
						<div class="col-auto">
						<button type="reset" class="btn btn-primary mb-3" ng-click="resetForm()" value="Reset" >Reset</button>
							<button type="submit" class="btn btn-primary mb-3">Save Detais</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>      
				</div>
			</div>
		</div>

	</div>


</section>



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	All COPYRIGHTS RESERVED BY GHANSHYAM SAINI :)
</footer>

<script>
	var app = angular.module('myApp', []);	
	app.controller('customersCtrl', function($scope, $http) {
		$http.get("/ci4/public/home/get_list")
		.then(function (response) {$scope.employs = response.data;});

		$scope.employ = angular.copy($scope.originalemploy);
		$scope.submitForm = function () {				
			var onSuccess = function (data, status, headers, config) {
				alert('Employ saved successfully.');
			};
			var onError = function (data, status, headers, config) {
				alert('Error occured.');
			}			
			var addnewemploy = angular.element("#addnewemploy");
			$http({
				method: "POST",
				url: "/ci4/public/home/insert_employ",
				dataType: 'json',
				data: JSON.stringify({ employ:$scope.employ }),
				headers: { "Content-Type": "application/x-www-form-urlencoded" }
				}).then(function(result) {
					onSuccess(); $scope.resetForm(); addnewemploy.modal("hide");		
				}, function(error) {
					onError();	$scope.resetForm();
			});  

		};
		$scope.resetForm = function () {
			$scope.employ = angular.copy($scope.Originalemploy);
			//$scope.upemploy = angular.copy($scope.Originalupemploy);
		};
		
		$scope.selectedItem = [];	
		$scope.editdetails = function(item) {			
			var editemploy = angular.element("#editemploy");
			if (editemploy) {				
			   $scope.selectedItem.push(item);
			   editemploy.modal("show");			
			}			
		};
		$scope.select = function(item) {
			var employdetails = angular.element("#employdetails");
			if (employdetails) {				
			   $scope.selectedItem.push(item);
			   employdetails.modal("show");			
			}			
		};
		
		//$scope.upemploy = angular.copy($scope.originalupemploy);
		
		$scope.updateForm = function (upemploy,id) {				
			var onSuccess = function (data, status, headers, config) {
				alert('Employ Update successfully.');
			};
			var onError = function (data, status, headers, config) {
				alert('Error occured.');
			}			
			var editemploy = angular.element("#editemploy");
			console.log(upemploy);
			$http({
				method: "POST",
				url: "/ci4/public/home/update_employ/"+id,
				dataType: 'json',
				data: JSON.stringify({ employ:upemploy }),
				headers: { "Content-Type": "application/x-www-form-urlencoded" }
				}).then(function(result) {
					onSuccess(); $scope.resetForm(); editemploy.modal("hide");		
				}, function(error) {
					onError(); $scope.resetForm();
			}); 
		};
		$scope.deleteForm = function (id) {				
			var onSuccess = function (data, status, headers, config) {
				alert('Employ delete successfully.');
			};
			var onError = function (data, status, headers, config) {
				alert('Error occured.');
			}		
			$http({
				method: "POST",
				url: "/ci4/public/home/delete_employ/"+id,
				dataType: 'json',				
				headers: { "Content-Type": "application/x-www-form-urlencoded" }
				}).then(function(result) {
					onSuccess();						
				}, function(error) {
					onError();				
			});  

		};
		
	});
</script>

</body>
</html>
