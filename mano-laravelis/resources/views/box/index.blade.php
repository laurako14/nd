<h1> Siuo metu sandelyje yra:</h1>
<ul>
@foreach ($boxes as $box)
    <li>
    ID: {{$box->id}} Bananas in box: {{$box->bananai}}
    <a href="{{route('box.edit', $box)}}">EDIT</a>
    </li>
    <form action="{{route('box.destroy', $box)}}" method="post">
    <button type="submit">DELETE</button>
    @csrf
    </form>
@endforeach
</ul>