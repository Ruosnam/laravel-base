<!DOCTYPE html>
<html>
<head>
	<title>Affiche Event</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<h2>Liste des evenements</h2>
		<br />
		<br />
		<div class="jumbotron">
			
			<table class="table table-striped table-bordered table-hover">
				<thead class="thead">
					<tr class="warning">
						<th>Id</th>
						<th>Title</th>
						<th>Color</th>
						<th>START Date</th>
						<th>END Date</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				@foreach($events as $event)
					<tbody>
						<tr>
							<td>{{ $event->id }}</td>
							<td>{{ $event->title }}</td>
							<td>{{ $event->color }}</td>
							<td>{{ $event->start_date }}</td>
							<td>{{ $event->end_date }}</td>
							<th>
								<a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success">Edit</a>
							</th>
						</tr>
					</tbody>
				@endforeach
			</table>	
		</div>
	</div>

</body>
</html>