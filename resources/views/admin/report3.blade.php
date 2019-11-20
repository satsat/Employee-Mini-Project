@extends('layouts.adminApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
               

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
               
               
            </div>
        </div>
    </div>
</div>
@endsection
