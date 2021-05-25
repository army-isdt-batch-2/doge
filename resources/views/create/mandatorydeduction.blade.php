@php $active = 'mandatorydeduction' @endphp
@extends('layouts.main')
@section('title', 'Create Mandatory Deductions')
@section('header' , 'Create Mandatory Deductions')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>

        <form class="row g-3">
            <div class="col-md-4">
                <label for="inputState" class="form-label">Contribution Type</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Tax</option>
                    <option>SSS</option>
                    <option>PhilHealth</option>
                    <option>Pagibig</option>
                </select>
            </div>
            <div class="col-8">
                <label for="inputDepartment" class="form-label">Base Range</label>
                <input type="text" class="form-control" id="inputDepartment"">
            </div>
            <div class=" col-md-4">
                <label for="inputPassword4" class="form-label">Monthly Contribution</label>
                <input type="number" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Employee Share</label>
                <input type="number" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Employeer Share</label>
                <input type="number" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>
@endsection