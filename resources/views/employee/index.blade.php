@extends('layouts.app')

@section('mainpart')

<div class="card my-4 px-0 container">

    <div class="card-header">
        <h3>All Employees</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee )
                     <tr>
                    <td>1</td>
                    <td>{{$employee -> name}}</td>
                    <td>{{$employee -> name}}</td>
                    <td>{{$employee -> designation}}</td>
                    <td>{{$employee -> salary}}</td>  

                    <td>
                        @if ($employee->status ==1)
                        <span class="badge bg-success">active</span>
                        @else
                        <span class="badge bg-warning">inactive</span> 
                        @endif
                    </td> 
                     
                    <td>
                        <a href="./edit.html" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
               
                
                {{-- <tr>
                    <td>1</td>
                    <td>Mamun</td>
                    <td>Mamun</td>
                    <td>SWE</td>
                    <td>70000</td>
                    <td><span class="badge bg-warning">inactive</span></td>
                    <td>
                        <a href="./edit.html" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>

@endsection