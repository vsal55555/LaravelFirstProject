{{-- @include('header') --}}

<h1>User page</h1>

{{-- @if ($user == "anil")
<h3>Hi {{ $user }}</h3>
@elseif($user == "sam")
<h3>Hello {{ $user }}</h3>
@else
<h3>Unknow user</h3>
@endif --}}

@for ($i=0;$i<10;$i++)
<h4>{{ $i }}</h4>    
@endfor


{{-- <x-header data = "user component header" />
<h1>Users Page</h1>
@include('inner')

@foreach ($users as $item)
    {{$item}}
@endforeach

@csrf
<script>
    var data =@json($users);
    console.warn(data[0]);
</script> --}}