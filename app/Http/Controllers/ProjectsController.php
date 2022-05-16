<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;



class ProjectsController extends Controller
{
    //maak een connectie met de database
    public function index() {
$projects = \DB::table('projects')
->get();

// ->where('status','bezig' )
// ->where('startdate','>=', '2021-01-01')
// ->get();
//^^via model^^

//sla alles op in een variable
$projects = project::all();

//stuur de variable mee terug naar de pagina
return view('projects.index', [
    'projects' => $projects
]);
 }

public function show($id) {
//vind het juiste project met behulp van de id
    $project = project::findOrFail($id);

return view('projects.show', [
    'project' => $project
]);
}



public function edit($id){
    $project = project::findOrFail($id);

    

    return view('projects.edit', [
        'project' => $project
    ]);
}

public function update(Request $request, $id){
$project = Project::findOrFail($id);
$project->title = $request->title;
$project->description = $request->description;
$project->startDate = $request->startdate;
$project->endDate = $request->enddate;
$project->status = $request->status;
$project->save();

return redirect()->route('projects.show' ,$id);
}

public function create() {
return view('projects.create');
}

public function store(Request $request){
    \DB::table('projects')->insert([
        'owner_id' => 1,
        'title' => $request['Title'],
        'description' => $request['description'],
        'startdate' => $request['startDate'],
        'enddate' => $request['endDate'],
        'status' => $request['status']
    ]);

return redirect()->route('projects.index');
}

}
