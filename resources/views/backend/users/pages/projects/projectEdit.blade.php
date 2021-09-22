@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-project-edit')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header">
           <div class="row">
                <div class="col-sm-4" style="margin-top:8px;">
                <a href="{{ URL::to('/user/project') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4 class="ml-4">Project Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/user/project/'.$project->id) }}" method="post">
                @csrf
                @method('PUT')
                 <span  id="project_name"><b style="color: red">@error('project_name')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="project_name" class="col-sm-2 col-from-label">Project Name </label>
                    <div class="col-sm-10">
                        <input type="text" id="project_name" value={{ $project->name }} name="project_name" class="form-control form-control-sm" placeholder="project name">
                    </div>
                </div>
                <span id="donar"><b style="color: red">@error('donar')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="donar" class="col-sm-2 col-from-label">Donar</label>
                    <div class="col-sm-10">
                        <input type="number" id="donar" value={{ $project->donor }} name="donar" class="form-control form-control-sm" placeholder="donar">
                    </div>
                </div>
                <span  id="email"><b style="color: red">@error('project_type')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="project_type" class="col-sm-2 col-from-label">Type of Project  </label>
                    <div class="col-sm-10">
                        <input type="text" id="project_type" value={{ $project->typeOfProject }} name="project_type" class="form-control form-control-sm" placeholder="project type">
                    </div>
                </div>
                <span  id="email"><b style="color: red">@error('start_date')*{{ $message }}@enderror</b><b class="ml-5" style="color: red">@error('end_date')*{{ $message }}@enderror</b></span>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="start_date" class="col-sm-6 col-from-label">Start Date</label>
                            <div class="col-sm-6">
                                <input type="date" id="start_date" value={{ $project->startDate }}  name="start_date" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-6 col-from-label">End Date</label>
                            <div class="col-sm-6">
                                <input type="date" id="end_date" value={{ $project->endDate }}  name="end_date" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <span  id="budget"><b style="color: red">@error('budget')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="budget" class="col-sm-2 col-from-label">Budget </label>
                    <div class="col-sm-10">
                        <input type="number" id="budget" value={{ $project->budget }} name="budget" class="form-control form-control-sm" placeholder="Project Budget">
                    </div>
                </div>
                 <span  id="number_group"><b style="color: red">@error('number_group')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="number_group" class="col-sm-2 col-from-label">Number of Group's</label>
                    <div class="col-sm-10">
                        <input type="number" id="number_group" value={{ $project->numberOfGroup }} name="number_group" class="form-control form-control-sm" placeholder="Number of group">
                    </div>
                </div>
                <span id="direct_beneficiaries"><b style="color: red">@error('direct_beneficiaries')*{{ $message }}@enderror</b><b class="ml-5" style="color: red">@error('indirect_beneficiaries')*{{ $message }}@enderror</b></span>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="direct_beneficiaries" class="col-sm-6 col-from-label">Direct Beneficiaries</label>
                            <div class="col-sm-6">
                                <input type="text" id="direct_beneficiaries" value={{ $project->directBeneficiaries }} name="direct_beneficiaries" class="form-control form-control-sm" placeholder="Direct beneficiaries">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="indirect_beneficiaries" class="col-sm-6 col-from-label">Indirect Beneficiaries</label>
                            <div class="col-sm-6">
                                <input type="text" id="indirect_beneficiaries" value={{ $project->indirectBeneficiaries }} name="indirect_beneficiaries" class="form-control form-control-sm" placeholder="indirect beneficiaries">
                            </div>
                        </div>
                    </div>
                </div>
                <span id="working_sector"><b style="color: red">@error('working_sector')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="working_sector" class="col-sm-2 col-from-label">Working Sector</label>
                    <div class="col-sm-10">
                        <input type="text" id="working_sector" value={{ $project->workingSector }} name="working_sector" class="form-control form-control-sm" placeholder="working sector">
                    </div>
                </div>
                <span id="working_area"><b style="color: red">@error('working_area')*{{ $message }}@enderror</b></span>
                 <div class="form-group row">
                    <label for="working_area" class="col-sm-2 col-from-label">Working Area</label>
                    <div class="col-sm-10">
                        <input type="text" id="working_area" value={{ $project->workingArea }} name="working_area" class="form-control form-control-sm" placeholder="working area">
                    </div>
                </div>
                <span  id="work_process"><b style="color: red">@error('work_process')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="work_process" class="col-sm-2 col-from-label">Work Process Explain</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="work_process"  name="work_process" rows="4" placeholder="explain work process">value={{ $project->workProcessExplain }}</textarea>
                    </div>
                </div>
                <span id="dncc"><b style="color: red">@error('dncc')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="dncc" class="col-sm-2 col-from-label"> DNCC</label>
                    <div class="col-sm-10">
                        <input type="text" id="dncc" value={{ $project->dncc }} name="dncc" class="form-control form-control-sm" placeholder="dncc">
                    </div>
                </div>
                <span id="dscc"><b style="color: red">@error('dscc')*{{ $message }}@enderror</b></span>
                <div class="form-group row">
                    <label for="dscc" class="col-sm-2 col-from-label"> DSCC</label>
                    <div class="col-sm-10">
                        <input type="text" id="dscc" value={{ $project->dscc }} name="dscc" class="form-control form-control-sm" placeholder="dscc">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dscc" class="col-sm-2 col-from-label"></label>
                    <div class="col-sm-10">
                         <input type="submit" class="btn btn-primary" />
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>
@endsection
