<x-Header />
{{-- <h1>{{$name}}--{{$age}}</h1> --}}
@foreach ($user as $users)
    <div>
        <h1> -- {{ $users['email'] }} -- {{ $users['password'] }}</h1>
    </div>
@endforeach
<div>
    <form action="{{ url('user', $user['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button> DELETE USER FROM DATABASE </button>
    </form>
</div>
<x-About />
