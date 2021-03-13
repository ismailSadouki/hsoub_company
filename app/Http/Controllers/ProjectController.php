<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProjectController extends Controller
{
    use ImageUploadTrait;
    public function __construct()
    {
        $this->middleware('Admin')->except('show');
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
        $project->title_ar = $request->title_ar;
        $project->title_en = $request->title_en;
        $project->link = $request->link;
        $project->desc_ar = $request->desc_ar;
        $project->desc_en = $request->desc_en;
        $project->image = $this->uploadImage( $request->image );

        $project->save();
        
        return back()->with('success',__('messages.Project Added successfully'));
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $lang = LaravelLocalization::getCurrentLocale();

        $project = Project::where('id',$id)->select(

            'id',
            'desc_'.$lang.' as desc',   
            'image',
            'link'

       )->first();
       
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
        $project->title_ar = $request->title_ar;
        $project->title_en = $request->title_en;
        $project->link = $request->link;
        $project->desc_ar = $request->desc_ar;
        $project->desc_en = $request->desc_en;
        if($request->has('image')){
            Storage::disk('public')->delete($project->image);
            $project->image = $this->uploadImage($request->image);
        }
        $project->update();
        return back()->with('success',__('messages.Project Updated Successfully'));
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

        return back()->with('success',__('messages.Project Deleted Successfully'));
    }
}
