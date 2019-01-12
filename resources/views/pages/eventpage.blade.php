<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="row" style="text-align:center;">
				<a href="/addeventurl" class="btn btn-success">ADD EVENTS</a>
				<a href="/editeventurl" class="btn btn-primary">EDIT EVENTS</a>
				<a href="/deleteeventurl" class="btn btn-danger">DELETE EVENTS</a>
			</div>
			<br>
			<div class="row">

				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif

				@if(\Session::has('success'))
					<div class="alert alert-success">
						<p>{{\Session::get('success') }}</p>
					</div>
				@endif

				<div class="col-md-8-">
					<div class="panel panel-default">

						<div class="panel-heading" style="background: #3e6da4; color: white;">
							Event Calendar [Full - Callendar]
						</div>

						<div class="panel-body">
						    {!! $calendar->calendar() !!}
							{!! $calendar->script() !!} 
						</div>

					</div>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>