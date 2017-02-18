 <html>
<title>TO DO
</title>
<body>
<center>
TO-DO EDIT
<form method=post action='/edit'>
  
  <input type="text" name="task" value="{{$todo->task}}"><br>
  
   <textarea name="text">{{$todo->more}}</textarea ><br>
    <input type="submit" value="submit edit">
<input type=hidden name=hid value='{{$todo->id}}'>
{{csrf_field()}}
</form>
 </center>
</body>
</html>