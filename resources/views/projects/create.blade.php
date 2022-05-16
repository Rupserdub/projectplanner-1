@extends('layouts.main')

@section('title')
    Project Create
@endsection

@section('content')
<h1>Create</h1>
    <p>Random test stuff</p>

    <form action={{route('projects.store')}} method="POST">
        @csrf
<label for="text">Projectnaam:</label>
<input type="text" name="Title"  required>
<br>
<label for="text">Description</label>
<input type="text" name="description"  required>
<br>
<label for="text">Start-date:</label>
<input type="date" name="startDate"  required>
<br>
<label for="text">End-date</label>
<input type="date" name="endDate"  required>
<br>
<label for="">Status:</label>
<select name="status" required>
    <option value="afgerond" >Afgerond</option>
    <option value="bezig" >Bezig</option>
    <option value="open" >Open</option>
  </select><br>

<input type="submit" name="Edit" class="btn btn-primary" value="Create project">

    </form>
@endsection