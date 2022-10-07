<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>list</title>

    <link rel="icon" type="image/png" href="favicon.png" />


    <link rel="stylesheet" type="text/css" href="css.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/sandstone/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.js"></script>
    <script src="js.js"></script>
    <script src="js1.js"></script>
	</head>
	<body class="loggedin" class="bg-dark">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>


		<h2 style="text-align: center; color: white; font-family: Poppins">DATABASE</h2>
  <h3 style="text-align: center; color: white; font-family: Poppins">INFORMATIVE__LINK__EVERYTHING</h3>
    <br>
    <div class="container" ng-app="sortApp" ng-controller="mainController">
    
    
    
        <form>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" placeholder="Search" ng-model="searchlink">
            </div>
          </div>
        </form>
      
        <table class="table table-bordered table-hover bg-white">
      
          <thead>
            <tr>
              <td class="text-center font-weight-bold bg-dark">
                <a href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse">
                  Website name
                  <span ng-show="sortType == 'name' && !sortReverse" class="fa fa-caret-down"></span>
                  <span ng-show="sortType == 'name' && sortReverse" class="fa fa-caret-up"></span>
                </a>
              </td>
              <td class="text-center font-weight-bold bg-dark">
                <a href="#" ng-click="sortType = 'link'; sortReverse = !sortReverse">
                  Link
                  <span ng-show="sortType == 'link' && !sortReverse" class="fa fa-caret-down"></span>
                  <span ng-show="sortType == 'link' && sortReverse" class="fa fa-caret-up"></span>
                </a>
              </td>
              <td class="text-center font-weight-bold bg-dark">
                <a href="#" ng-click="sortType = 'description'; sortReverse = !sortReverse">
                Description 
                  <span ng-show="sortType == 'description' && !sortReverse" class="fa fa-caret-down"></span>
                  <span ng-show="sortType == 'description' && sortReverse" class="fa fa-caret-up"></span>
                </a>
              </td>
            </tr>
          </thead>
          
          <tbody>
            <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchlink">
              <td class="font-weight-bold">{{ roll.name }}</td>
              <td class="text-center"><a style="color:rgb(55, 89, 238)" href="{{ roll.link }}" target="blank">{{ roll.link }}</a></td>
              <td class="text-center">{{ roll.description }}</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td></td>
              <td style="text-align: center;" class="font-weight-bold">
                Useful links
              </td>
              <td></td>
            </tr>
          </tbody>
          <tbody>
            <tr ng-repeat="roll in new | orderBy:sortType:sortReverse | filter:searchlink">
              <td class="font-weight-bold">{{ roll.name }}</td>
              <td class="text-center"><a style="color:rgb(55, 89, 238)" href="{{ roll.link }}" target="blank">{{ roll.link }}</a></td>
              <td class="text-center">{{ roll.description }}</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td></td>
              <td style="text-align: center;" class="font-weight-bold">
                GIT TOOLS
              </td>
              <td></td>
            </tr>
          </tbody>
          <tbody>
            <tr ng-repeat="roll in tool | orderBy:sortType:sortReverse | filter:searchlink">
              <td class="font-weight-bold">{{ roll.name }}</td>
              <td class="text-center"><a style="color:rgb(55, 89, 238)" href="{{ roll.link }}" target="blank">{{ roll.link }}</a></td>
              <td class="text-center">{{ roll.description }}</td>
            </tr>
          </tbody>
      
        </table>
      
        
      </div>
	</body>
</html>