<html>
<title>TO DO
</title>
<body>

TO-DO
<table>
@foreach($task as $t)
{{$t->id}}<br>
{{$t->task}}<br>

@endforeach
<input type=button value=view><br>
@if(isset($task))
 {{$task}}
 @endif
<a href="/disp">VIEW</a>

</body>
</html>