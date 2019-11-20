@extends('layouts.adminApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
              
                <h3>Employee with Highest Salary per Department.</h3>
                <table class="table table-hover">
                    <tr class='table table-active'><th>Department Name</th><th>Maximum Monthly Salary of Employee</th></tr>
                    @if(count($employees_max_sal_all_dep)>0)
                        @foreach($employees_max_sal_all_dep as $employee)
                        <tr><td>{{$employee->department }}</td><td>{{number_format($employee->salary, 2)}}</td></tr>
                        @endforeach
                    @else
                    <h2>No Records Found</h2>
                    @endif
                </table>
<hr/>
               
            </div>
        </div>
    </div>
</div>
@endsection
