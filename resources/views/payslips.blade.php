@php $active = 'payslips' @endphp
@extends('layouts.main')
@section('title' , 'Payslip')
@section('header' , 'Payslip')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>
        <div class="col-1 text-end">
            <a href="/payslips/create" class="btn btn-primary pull-right">Create</a>
        </div>

        <div class="col-1 text-end">
            <a href="/payslips/view" class="btn btn-primary pull-right">View</a>
        </div>


        <div class="col-8"></div>
        <div class="col-4 text-end">
            <input type="text" class="form-control" placeholder="Search">
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Processed</th>
                    <th scope="col">Cut off Start</th>
                    <th scope="col">Cut off End</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection