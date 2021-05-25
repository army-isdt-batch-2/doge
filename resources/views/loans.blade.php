@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title' , 'Loan')
@section('header' , 'Loans')
@section('content')
<div class="card">
    <div class="card-body row">
        <div class="col-10">
            <h2>@yield('header')</h2>
        </div>
            <div class="col-2 text-end"> 
                <a href="/loans/create" class="btn btn-primary pull-right">Create</a>
            </div> 
            
            <div class="col-8"></div>
                <div class="col-4 text-end"> 
                    <input type="text" class="form-control" placeholder="Search">
                </div> 
                
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Loan Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Months Payable</th>
                <th scope="col">Total</th>
                <th scope="col">Balance</th>
                <th scope="col">Status</th>
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