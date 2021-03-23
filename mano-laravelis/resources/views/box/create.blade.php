<form action="{{route('box.store')}}" method="post">

<input type="text" name="banana_in">
<button type="submit">Create box</button>
@csrf
</form>