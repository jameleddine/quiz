<!Doctype html>
<html>
<head>
	<title>Quiz Game</title>

	
	{!! Html::style('assets/bootstrap/css/bootstrap.css') !!}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
<div class="btn-group">
  <button type="button" class="btn btn-danger" onclick="location.href = '/';">Home</button>
  <button type="button" class="btn btn-warning" onclick="location.href = '/';">About</button>
  <button type="button" class="btn btn-info" onclick="location.href = '/quiz';">News</button>
  <button type="button" class="btn btn-success" onclick="location.href = '/';">Best Score</button>
  <button type="button" class="btn btn-inverse" onclick="location.href = '/';">Contact</button>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="caret"></span>
  <span class="sr-only">Autre</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

</center>
@yield('first')


</body>
</html>