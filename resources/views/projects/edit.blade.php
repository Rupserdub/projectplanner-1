@extends('layouts.main')

@section('title')
    Project edit
@endsection

@section('content')
<h1>Edit</h1>
    <p>Random test stuff</p>

    <form action={{route('projects.update', $project->id)}} method="POST">^
        {{-- gebruik de PUT method voor het aanpassen van de data bij een project --}}
        @csrf
@method('PUT')
<label for="text">Projectnaam:</label>
<input type="text" name="title" value="{{$project->title}}" required>
<br>
<label for="text">Description</label>
<input type="text" name="description" value="{{$project->description}}" required>
<br>
<label for="text">Start-date:</label>
<input type="date" name="startDate" value="{{$project->startdate}}" required>
<br>
<label for="text">End-date</label>
<input type="date" name="endDate" value="{{$project->enddate}}" required>
<br>
<label for="">Status:</label>
<select name="status" required>
    {{-- gebruik de if method om de gekozen status te tonen --}}
    <option value="afgerond" @if ($project->status == 'afgerond')
        selected
    @endif>Afgerond</option>
    <option value="bezig" @if ($project->status == 'bezig')
        selected
    @endif>Bezig</option>
    <option value="open" @if ($project->status == 'open')
        selected
    @endif>Open</option>
  </select><br>

<input type="submit" name="Edit" class="btn btn-primary" value="Edit project">

    </form>
@endsection