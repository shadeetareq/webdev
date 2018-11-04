<!DOCTYPE html>
<html>
<head>
	<title>addjob</title>
		<link rel="stylesheet" type="text/css" href="regstyle.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body class="container " style="background: #333" >
	<div class="header head">
		<img class="img img-responsive" src=" " alt="" >
		This is a header part 
	</div>
	<div class="row">
	<div class="col-md-2"  >
	</div>
	<div class="col-md-8">
			

		<div class="inputs ">
			<form class="form" action="jobadd1.php" method="post" style="text-align: center;">
					<p>job title<input type="text" name="title" placeholder="job title"></p>
					<p>company name <input type="text" name="companyname" placeholder="name"></p>
					<p>city<input type="text" name="city" placeholder="city"></p>
					<p>jtype<input type="text" name="jtype" placeholder="job type"></p>
					<p>description<input type="text" name="description" placeholder="descrpition"></p>
					<p>requirments<input type="text" name="requirments" placeholder="requirments"></p>
					<p>job salary<input type="text" name="salary" placeholder="salary"></p>
					

				<input type="submit" name="submit" value="add">
									
			</form>
		</div>
	</div>
	<div class="col-md-2">
 </div>
	
</body>
</html>