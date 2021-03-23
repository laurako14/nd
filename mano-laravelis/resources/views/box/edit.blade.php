<form action="{{route('box.update', $box)}}" method="post">

<input type="text" name="banana_in" value="{{$box->bananai}}">
<button type="submit">Edit box</button>
@csrf
</form>