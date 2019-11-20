@extends('layouts.adminApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
     
                 <h3>Employee Who has Fifth Highest Salary</h3>
                <table class="table table-hover">
                    <tr class='table table-active'><th>Employee Name</th><th>Employee Email</th><th>Employee Contact</th><th>Monthly Salary</th></tr>
                    @if(count($employees_fifth_high_salary)>0)
                        @foreach($employees_fifth_high_salary as $employee)
                        <tr><td>{{$employee->sFirstName }} {{$employee->sLastName }}</td><td>{{$employee->sEmail}}</td><td>{{$employee->nContact}}</td><td>{{number_format($employee->nAmount, 2)}}</td></tr>
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
