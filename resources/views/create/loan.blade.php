@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title', 'Create Loan')
@section('header' , 'Create Loan')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>

        <form class="row g-3">
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Designation</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Loan Type</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Loan Amount</label>
                    <input type="number" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Months Payable</label>
                    <input type="number" class="form-control" id="inputAddress">
                </div>
            </div>

            <div class="col-md-8">
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Notes</label>
                    <textarea rows="7" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection