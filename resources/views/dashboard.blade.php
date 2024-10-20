dashboard <br> 
<a href="{{route('notes.create')}}">create note</a> <br>

<form action="{{route('logout-post')}}" method="POST">
    @csrf
    <button type="submit">logout</button>
</form>

<hr>
<a href="{{route('user.show', $user)}}">show profile</a> <br>
<a href="{{route('user.edit', $user)}}">edit profile</a> <br>
{{-- <a href="#">delete this account</a> --}}
{{$user->name}} <br>
{{$user->email}} <br>
{{$user->id}} <br> <hr>

@foreach ($notes as $note)
{{$note->id}} <br>
{{$note->title}} <br>
{{$note->description}} <br>
{{$note->content}} <br>  
<a href="{{route('notes.show', $note)}}">show note</a> <br>
@can('update', $note)
    <a href="{{ route('notes.edit', $note) }}">Edit note</a>
@endcan <br>

<form action="{{route('notes.destroy', $note)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">delete note</button>
</form>
<hr>
@endforeach



