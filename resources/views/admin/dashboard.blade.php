@extends('layouts.adminApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="alert alert-success">All Employee Reports</h2><hr/>
                <h3>Employees who have joined in this year</h3>
                <table class="table table-hover">
                    <tr class='table table-active'><th>Employee Name</th><th>Employee Email</th><th>Employee Contact</th><th>Date of Jaining</th></tr>
                    @if(count($employees_joined_this_year)>0)
                        @foreach($employees_joined_this_year as $employee)
                        <tr><td>{{$employee->sFirstName }} {{$employee->sLastName }}</td><td>{{$employee->sEmail}}</td><td>{{$employee->nContact}}</td><td>{{date('F d, Y', strtotime($employee->dJoiningDate))}}</td></tr>
                        @endforeach
                    @else
                    <h2>No Records Found</h2>
                    @endif
                </table>
<hr/>

                 <h3>Employees who have Birthday This month</h3>
                <table class="table table-hover">
                    <tr class='table table-active'><th>Employee Name</th><th>Employee Email</th><th>Employee Contact</th><th>Date of Birth</th></tr>
                    @if(count($employees_birthday_this_month)>0)
                        @foreach($employees_birthday_this_month as $employee)
                        <tr><td>{{$employee->sFirstName }} {{$employee->sLastName }}</td><td>{{$employee->sEmail}}</td><td>{{$employee->nContact}}</td><td>{{date('F d, Y', strtotime($employee->dDateOfBirth))}}</td></tr>
                        @endforeach
                    @else
                    <h2>No Records Found</h2>
                    @endif
                </table>

<hr/>
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

               
            </div>
        </div>
    </div>
</div>
@endsection
