@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title', 'Create Departments')
@section('header' , 'Create Departments')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>
        
        <form class="row g-3">
            <div class="col-10">
                <label for="inputDepartment" class="form-label">Department</label>
                <input type="text" class="form-control" id="inputDepartment" placeholder="Department Name">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>
@endsection