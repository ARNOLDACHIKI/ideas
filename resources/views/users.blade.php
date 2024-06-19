@foreach ($users as $user )
<h1>{{$user['name']}}
    {{$user['age']}} </h1>
<hr>
@if($user['age']<19)
<p>user cant speak</p>
@endif
    @endforeach
