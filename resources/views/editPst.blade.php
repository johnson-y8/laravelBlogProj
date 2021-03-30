<!-- title >>> {{$test->title}} <br><br>
author >>> {{$test->contributor}}<br><br>
body >>> {{$test->description}}<br><br> -->


<form method="POST" action="{{route('updatePost', [$test->id])}}">
    @csrf
    <label >title</label>
    <br>
    <input type="text" size="48" name="title" value="{{$test->title}}"><br><br>
    
    <label >author</label>
    <br>
    <input type="text" name="contributor" value="{{$test->contributor}}"><br><br>

    <label >body</label>
    <br>
    <textarea rows="10" cols="50" name="description" type="text">{{$test->description}}</textarea><br><br>

    <input type="submit" value="edit post"><br>
   
</form>

{{route('updatePost', [$test->id])}}