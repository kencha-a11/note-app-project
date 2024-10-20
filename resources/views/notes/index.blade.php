@extends('dashboard') <!-- Make sure to extend your main layout -->

@section('content')
<div class="container">
    <h1 class="mb-4">My Notes</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Create New Note</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td>
                        <a href="{{ route('notes.show', $note) }}" class="btn btn-info">View</a>
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this note?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No notes found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
