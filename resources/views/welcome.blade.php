<html>
<title>TO DO
</title>
<body>
<center>
TO-DO
<form method=post action='/done'>
  
  <input type="text" name="task"><br>
  
   <textarea name="text"></textarea><br>
    <input type="submit" value="submit">
{{csrf_field()}}
</form>

<a href="/a"><input type=button value=view><br></a>

@if(isset($task))
TO-DO VIEW
 <table border="1">
 <tr>
    
    <th>ID</th>
    <th>TITLE</th>
    <th>MORE</th>
</tr>
@foreach($task as $t)
<tr>
<td>{{ $t->id}}
</td>
<td>{{ $t->task}}
</td>
<td>{{$t->more}}
</td>
<td><a href="/delete/{{$t->id}}">delete</a></td>
<td><a href="/edit/{{$t->id}}">edit</a></td>
</tr>

@endforeach
 </table>
 @endif
  </center>
</body>
</html>