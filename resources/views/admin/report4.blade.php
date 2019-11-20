@extends('layouts.adminApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
              
                <h3>Employees Per Department</h3>
                <table class="table table-hover">
                    <tr class='table table-active'><th>Department Name</th><th>Total Employees</th></tr>
                    @if(count($employees_per_department)>0)
                        @foreach($employees_per_department as $employee)
                        <tr><td>{{$employee->department }}</td><td>{{$employee->count}}</td></tr>
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
