@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title', 'Create Timekeeping')
@section('header' , 'Add Attendance Record')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>

        <form class="row g-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Attendance Date</label>
                <input type="date" class="form-control" id="inputAddress">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection