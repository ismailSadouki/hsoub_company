<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    use ImageUploadTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {

        $project = new Project;
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->link = $request->link;
        $project->image = $this->uploadImage( $request->image );

        $project->save();
        
        return back()->with('success','Project Added successfully');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return response()->json(array(
            'project' => $project
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProject $request,Project $project)
    {
        $project->title = $request->title;
        $project->link = $request->link;
        $project->desc = $request->desc;
        if($request->has('image')){
            Storage::disk('public')->delete($project->image);
            $project->image = $this->uploadImage($request->image);
        }
        $project->update();
        return back()->with('success','Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::disk('public')->delete($project->image);
        $project->delete();

        return back()->with('success','Project Deleted Successfully');
    }
}
