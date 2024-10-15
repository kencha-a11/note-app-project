<h1>NOTE-LIST</h1>
<a href="{{route('note-create')}}">route:note-create</a> <br>
<a href="{{route('home')}}">route:home</a>
<form action="{{ route('note-search') }}" method="POST">
    @csrf
    <b>Search</b> <input type="text" name="search" id="search" placeholder="Search note here">
    <button type="submit">Search Note</button>
</form>

<hr>
@foreach ($notes as $note)
<b>Title:</b> {{$note->title}} <br>
<b>Description:</b> {{$note->description}} <br>
<b>Content:</b> {{$note->content}} <br>
<a href="{{route('note-show', $note)}}">note-show-details</a>
<hr>
@endforeach