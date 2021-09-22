@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-project-details')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header">
           <div class="row">
              <div class="col-sm-4" style="margin-top:8px;">
                <a href="{{ URL::to('/user/project') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Project Details</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $project->name }}</td>
                        </tr>
                        <tr>
                            <td>Donor</td>
                            <td>{{ $project->donor }}</td>
                        </tr>
                        <tr>
                            <td>Type of Project</td>
                            <td>{{ $project->typeOfProject }}</td>
                        </tr>
                        <tr>
                            <td>Date </td>
                            <td>Start Date: {{ $project->startDate }}<br />
                            End Date: {{ $project->endDate }}
                            </td>
                        </tr>
                        <tr>
                            <td>Budget</td>
                            <td>{{ $project->budget }}</td>
                        </tr>
                        <tr>
                            <td>Number of Group</td>
                            <td>{{ $project->numberOfGroup }}</td>
                        </tr>
                        <tr>
                            <td>Direct Beneficiaries</td>
                            <td>{{ $project->directBeneficiaries }}</td>
                        </tr>
                        <tr>
                            <td>Indirect Beneficiaries</td>
                            <td>{{ $project->indirectBeneficiaries }}</td>
                        </tr>
                        <tr>
                            <td>Working Sector</td>
                            <td>{{ $project->workingSector }}</td>
                        </tr>
                        <tr>
                            <td>Work Process Explain</td>
                            <td>{{ $project->workProcessExplain }}</td>
                        </tr>
                        <tr>
                            <td>DNCC</td>
                            <td>{{ $project->dncc}}</td>
                        </tr>
                        <tr>
                            <td>DSCC</td>
                            <td>{{ $project->dscc }}</td>
                        </tr>
                        <tr>
                            <td>Working Area</td>
                            <td>{{ $project->workingArea }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{ $project->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
