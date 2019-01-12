<!DOCTYPE html>
<html>
<head>
	<title>Modifier Evenment</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{action('EventController@update',$id)}}" method="post">
			{{ csrf_field() }}
			<div class="container">
				<div class="jumbotron" style="margin-top: 5%;">
					<h1>Update your event</h1>
					<hr>
					<input type="hidden" name="_method" value="UPDATE" />
					
				</div>
			</div>
		</form>
	</div>
	
</body>
</html>