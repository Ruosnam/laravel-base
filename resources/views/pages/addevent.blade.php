<!DOCTYPE html>
<html>
<head>
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default ">
					<div class="panel-heading" style="background: #2e6da4; color: white">
						Add Event to Calendar
					</div>
					<div class="panel-body">
						    <h1>Task: Add Data</h1>
						    
						    <form method="post" action="{{ action('EventController@store') }}" accept-charset="UTF-8">	
						    	{{ csrf_field() }}

						    	<label for="">Enter Title of event</label>
						    	<input type="text" class="form-control" name="title" placeholder="Enter The Title" /><br/><br />

						    	<label for="">Enter Color of event</label>
						    	<input type="color" class="form-control" name="color" placeholder="Enter The Color" /><br/><br />

						    	<label for="">Enter Start dat of event</label>
						    	<input type="datetime-local" class="form-control" name="start_date" placeholder="Enter The start date" /><br/><br />

						    	<label for="">Enter End date of event</label>
						    	<input type="datetime-local" class="form-control" name="end_date" placeholder="Enter The End Date" /><br/><br />
						    	
						    	<input type="submit" name="submit" class="btn btn-primary" value="Add Event date" />
						    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>