<!DOCTYPE html>
<html>
<head>
	<title>Display One item</title>
</head>
<body>

@if(Session::has('message'))
	{{ Session::get('message')}}
@endif
<h1>Display All Article Info</h1>
	<p>{{$article->title}}</p>
	<p>{{$article->content}}</p>
	<a href='{{url("articles/$article->id/edit")}}'><button >Edit</button>
	<a href='{{url("articles/$article->id/delete")}}'><button>Delete</button></a>	



</body>
</html>