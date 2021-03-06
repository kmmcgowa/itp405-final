<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Photos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    body {
      background: linear-gradient(#B2FEFA, #0ED2F7);
      height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      background-repeat: no-repeat;
    	background-attachment: fixed;
    }
    nav {
    	position: fixed;
    	width: 100vw;
    	height: 40px;
    	background-color: rgba(255,255,255,.85);
    	z-index: 100;
    }
    ul{
    	list-style: none;
    	padding: 10px 0;
    }
    li{
    	display: inline-block;
			margin-left: 15px;
    }
    .container{
    	padding-top: 40px;
    }
    .imgcont{
    	position: relative;
    }
    h2{
			position: absolute;
			margin: 5% 5%;
			color: #fff;
			text-shadow: 3px 3px 2px #333;
    }
    img {
    	width: 100%;
    	margin: 25px 0;
    }
  </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/create/photo">Add new Photo</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</nav>
	<div class="container">
	@foreach($photos as $photo)
		<a href="/photo/{{$photo->id}}">
			<div class="imgcont">
				<h2>{{$photo->title}}</h2>
				<img src="{{$photo->image}}" alt="{{$photo->description}}">
			</div>
		</a>
	@endforeach
	</div>
</body>
</html>