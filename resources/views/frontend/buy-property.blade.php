@extends('layouts.app')
@section('content_box')
    <div class="container p-lg-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Buy Property</h1>
                {{--make a table with bootstrap--}}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Property Name</th>
                        <th>Property Price</th>
                        <th>Property Description</th>
                        <th><address>Property </address></th>
                        <th>Property Image</th>
                        <th>Buy</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$property->title}}</td>
                            <td><b>{{'BDT ' . (int) $property->price}}</b></td>
                            <td>{{$property->description}}</td>
                            <td>{{$property->address}}</td>
                            <td><img src="{{ asset('/storage/property/' . $property->image) }}" alt="" width="100px" height="100px"></td>
                            <td><a href="{{ route('buy-property', [$property->id]) }}" class="btn btn-primary">Buy Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
