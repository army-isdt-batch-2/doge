@php $active = 'leaves' @endphp
@extends('layouts.main')
@section('title', 'Create Leave')
@section('header' , 'Create Leave')
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
                    <label for="inputPassword4" class="form-label">Leave Type</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="inputAddress">
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