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
    h2{
			color: #fff;
    }
    img {
    	width: 100%;
    	margin: 25px 0;
    }
    p{
    	padding-bottom: 5%;
    }
  </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/photos">Photos</a></li>
			<li><a href="/create/photo">Add new Photo</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</nav>
	<div class="container">
		<div class="imgcont">
			<h2>{{$photo->title}}</h2>
			<img src="{{$photo->image}}" alt="{{$photo->description}}">
			<p>{{$photo->description}}</p>
		</div>
	</div>
</body>
</html>