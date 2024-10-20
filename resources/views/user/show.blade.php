Show User Detail <br>
<a href="{{route('dashboard')}}">return dashboard</a>
<hr>

user id: {{$user->id}} <br>
name: {{$user->name}} <br>
email: {{$user->email}} <br>
email verified at: {{$user->email_verified_at}} <br>
created_at: {{$user->created_at}} <br>
updated_at: {{$user->updated_at}} <br>
