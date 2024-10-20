hello there this is user edit form <br> 
<a href="{{route('dashboard')}}">return to dashboard</a>
<hr>
<form action="{{ route('user.update', $user) }}" method="POST"> <!-- Use the correct route name -->
    @csrf
    @method('PUT')

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required> <!-- Use old() to retain value on validation error -->
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required> <!-- Use old() to retain value on validation error -->
    </div>
    {{-- Uncomment this if you want to allow password updates --}}
    {{-- <div>
        <label>Password:</label>
        <input type="password" name="password">
    </div>
    <div>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation">
    </div> --}}
    <button type="submit">Update User</button>
</form>
