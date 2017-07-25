<!DOCTYPE html>
<html>
<head>
	<title>Autocomplete AngularJS</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	
	<script type="text/javascript" src="./script.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body ng-app="myapp">
	<div class="container">
      	<div class="header clearfix">
	        <nav>
				<ul class="nav nav-pills float-right">
					<li class="nav-item">
						<a class="nav-link active" href="#">Autocomplete <span class="sr-only">(current)</span></a>
					</li>
				</ul>
	        </nav>
	        <h3 class="text-muted">AngularJS</h3>
      	</div>
		<h4>Tìm Kiếm Người Dùng</h4>
		<div class="row">
			<div class="col-4">
				<form>
					<div class="form-group">
						<div class="dropdown" ng-controller="searchCtrl">
							<label for="name">Nhập tên:</label>
							<input type="text" ng-keyup="searchUsers()" ng-model="name" class="form-control" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<ul id="list-users" class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<a class="dropdown-item" ng-click="setValue($index)" ng-repeat="result in searchResult" >{{result.name}}</a>
							</ul>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-12">Xem thêm hướng dẫn về AngularJS tại: <a href="www.codehub.vn">Codehub.vn</a> &copy; 2017</div>
		</div>
	</div>
</body>
</html>