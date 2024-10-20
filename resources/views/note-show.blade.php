<h1>NOTE-SHOW</h1>

<b>ID:</b>{{$note->id}} <br>
<b>Title:</b>{{$note->title}} <br>
<b>Description:</b>{{$note->description}} <br>
<b>Content:</b>{{$note->content}} <br>
<b>Created_at:</b>{{$note->created_at}} <br>
<b>Updated_at:</b>{{$note->updated_at}} <br> <hr>
<a href="{{route('note-edit', $note)}}">route:note-edit</a> <br>
<a href="{{route('note-list')}}">route:note-list</a>
