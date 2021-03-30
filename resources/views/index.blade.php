
 

@foreach ($posts as $post)

    <p>This is title <a href="{{route('single', [$post->id])}}">{{ $post->title }}</a></p>
    <p>This is autor {{ $post->contributor }}</p>
    <p>This is description {{$post->description}}</p>

    <!-- <a href="{{route('delete', [$post->id])}}">delete</a> -->

    <form action="{{route('delete', [$post->id])}}" method="GET">
	<button type="submit" >delete</button>
    </form>
    <br><br>

@endforeach
