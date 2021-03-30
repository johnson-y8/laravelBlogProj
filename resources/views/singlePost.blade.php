
<p>This is autor {{ $item->title }}</p>
<p>This is autor {{ $item->contributor }}</p>
<p>This is autor {{ $item->description }}</p>

<form action="{{route('delete', [$item->id])}}" method="GET">
	<button type="submit" >delete</button>
    </form>
<br>
<br>

    <form action="{{route('editP', [$item->id])}}" method="GET">
	<button type="submit" >edit</button>
    </form>