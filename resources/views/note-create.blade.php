<h1>NOTE-CREATE</h1>
<a href="{{route('note-list')}}">route:note-list</a> <hr>
<form action="{{route('note-store')}}" method="POST">
    @csrf
    Title: <input type="text" name="title" id="title" placeholder="enter title"> <br>
    Description: <input type="text" name="description" id="description" placeholder="enter description"> <br>
    Content: <textarea name="content" id="content" placeholder="enter content"></textarea> <br>
    <button type="submit">note-create</button>
</form>
