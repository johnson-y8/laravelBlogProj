


<form method="POST" action="{{route('addpost')}}">
    @csrf

    <label >title</label>
    <br>
    <input type="text" size="48" name="title"><br><br>
    
    <label >author</label>
    <br>
    <input type="text"  name="contributor" ><br><br>

    <label >body</label>
    <br>
    <textarea rows="10" cols="50" type="text"  name="description"></textarea><br><br>

    <input type="submit" value="create post"><br>
   
</form>