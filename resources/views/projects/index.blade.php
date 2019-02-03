{{-- <!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
    <h1>Projects</h1>

    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach

</body>
</html> --}}

@extends('layout')

@section('content')

    <h1 class='title'>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection

{{--

Sunday afternoon!
O nee, avond was het. Nadat ik terug ben gekoken van Jaap

nog een verandering

--}}
