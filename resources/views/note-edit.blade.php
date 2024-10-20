<h1>NOTE-EDIT</h1>
<a href="{{route('note-show', $note)}}">route:note-show-data</a> <br>
<b>ID:</b> {{$note->id}} <br>
<b>Created_at</b> {{$note->created_at}} <br>
<b>Updated_at</b> {{$note->updated_at}} <br>
<hr>
<form action="{{route('note-update', $note)}}" method="POST">
    @csrf
    @method("PUT")
    <b>Title:</b> <input type="text" name="title" id="title" value="{{$note->title}}"> <br>
    <b>Description:</b> <input type="text" name="description" id="description" value="{{$note->description}}"> <br>
    <b>Content:</b> <textarea name="content" id="content">{{$note->content}}</textarea> <br>
    <button type="submit">route:note-update-data</button>
</form>
<form action="{{ route('note-delete', $note) }}" method="POST" onsubmit="return confirmDelete('{{ $note->title }}');">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Note</button>
</form>

<script>
    function confirmDelete(noteTitle) {
        return confirm('Note about to delete: ' + noteTitle + '!');
    }
</script>
