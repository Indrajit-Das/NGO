<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Auth;
use Illuminate\Http\Request;

class NgoUsersProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->ngo->id;
        $projects = Project::where('ngo_id',$id)->paginate(10);
        return view('backend.users.pages.projects.projectList',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.pages.projects.projectEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'project_name' =>'required',
            'donar' =>'required',
            'project_type' => 'required|max:100',
            'start_date' => 'required|max:100',
            'end_date' => 'required',
            'budget' => 'required',
            'number_group' => 'required',
            'direct_beneficiaries' => 'required',
            'indirect_beneficiaries' => 'required',
            'working_sector' => 'required',
            'working_area' => 'required',
            'work_process' => 'required',
            'dncc' => 'required',
            'dscc' => 'required',
        ]);

        $project = new Project();
        $project->name = $request->project_name;
        $project->donor = $request->donar;
        $project->typeOfProject = $request->project_type;
        $project->startDate = $request->start_date;
        $project->endDate = $request->end_date;
        $project->budget = $request->budget;
        $project->numberOfGroup = $request->number_group;
        $project->directBeneficiaries = $request->direct_beneficiaries;
        $project->indirectBeneficiaries = $request->indirect_beneficiaries;
        $project->workingSector = $request->working_sector;
        $project->workProcessExplain = $request->work_process;
        $project->workingArea = $request->working_area;
        $project->dncc = $request->dncc;
        $project->dscc = $request->dscc;
        $project->ngo_id = Auth::user()->ngo->id;
        $project->save();
         toast('Project Saved Successfully!','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Project::find($id);
        return view('backend.users.pages.projects.projectDetails',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::find($id);
        return view('backend.users.pages.projects.projectEdit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $project = Project::find($id);
        $project->name = $request->project_name;
        $project->donor = $request->donar;
        $project->typeOfProject = $request->project_type;
        $project->startDate = $request->start_date;
        $project->endDate = $request->end_date;
        $project->budget = $request->budget;
        $project->numberOfGroup = $request->number_group;
        $project->directBeneficiaries = $request->direct_beneficiaries;
        $project->indirectBeneficiaries = $request->indirect_beneficiaries;
        $project->workingSector = $request->working_sector;
        $project->workProcessExplain = $request->work_process;
        $project->workingArea = $request->working_area;
        $project->dncc = $request->dncc;
        $project->dscc = $request->dscc;
        $project->ngo_id = Auth::user()->ngo->id;
        $project->save();
        toast('Project updated Successfully!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::find($id);
        $project->delete();
        toast('Project deleted Successfully!','success');
        return redirect('/user/projects');
    }
    public function status($id){

        $admin = Project::find($id);
        if($admin->status =='upcoming'){
            $admin->status = 'running';
            $admin->save();
        }
        else if($admin->status =='running'){
            $admin->status = 'completed';
            $admin->save();
        }
        else{
            $admin->status='upcoming';
            $admin->save();
        }
        return redirect()->back();
    }
}
