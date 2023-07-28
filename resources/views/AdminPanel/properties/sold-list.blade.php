@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Properties</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Properties</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Property</th>
                            <th scope="col">Sold at</th>
                            <th scope="col">Price ( ₹ )</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">City</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Reviews</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pro as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->title }}</th>
                                <th scope="row">{{ \Carbon\Carbon::parse($item->sold_at)->format('d-m-Y') }}</th>
                                <th scope="row">{{ number_format($item->price) }}</th>
                                <th scope="row">{{ $item->Cate->name }}</th>
                                <th scope="row"><img height="30rem" class="rounded" style="cursor: pointer"
                                        data-fancybox="gallery"
                                        data-src="{{ asset('/storage/property/' . $item->image) }}"
                                        src="{{ asset('/storage/property/' . $item->image) }}" alt="Error"></th>
                                <th scope="row">{{ $item->City->city }}</th>
                                <th scope="row"><a href="{{ route('get_gallary', $item->id) }}"
                                        class="btn btn-info btn-sm"><i class="fas fa-images"></i></a></th>
                                <th scope="row"><a href="{{ route('get_reviews', $item->id) }}"
                                        class="btn btn-secondary btn-sm"><i class="fas fa-comment-alt"></i></a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
        });
    </script>
@endsection
