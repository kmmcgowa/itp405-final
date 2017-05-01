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
			<li><a href="/logout">Logout</a></li>
		</ul>
	</nav>
	<div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="/create/photo" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Image</label>
        <textarea class="form-control" id="exampleTextarea" rows="2" name="image" placeholder="Image URL or URI in base 64" value="{{old('image')}}"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleTextarea1">Description</label>
        <textarea class="form-control" id="exampleTextarea1" rows="3" name="description" placeholder="Description" value="{{old('description')}}"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleSelect1">Artist</label>
        <select class="form-control" id="exampleSelect1" name="artist">
          @foreach($artists as $artist)
          <option value="{{$artist->id}}" value="{{old('artist')}}">{{$artist->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleSelect2">Format</label>
        <select class="form-control" id="exampleSelect2" name="format">
          @foreach($formats as $format)
          <option value="{{$format->id}}" value="{{old('format')}}">{{$format->format}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	</div>
</body>
</html>