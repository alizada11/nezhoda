@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div id="msg"></div>
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Shops List</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success " href="{{ route('shop.create') }}"> Create New Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Shop Name</th>
                            <th>Shop Category</th>
                            <th>Country</th>
                            <th>Address</th>
                        </tr>
                        @foreach ($shops as $shop)
                        <tr>
                            <td>{{ $shop->id }}</td>
                            <td>{{ $shop->shop_name }}</td>
                            <td>{{ $shop->category }}</td>
                            <td>{{ $shop->country }}</td>
                            <td>{{ $shop->address }}</td>
                            <td class="text-center"><a href="#" class="prefered"><i class="fa fa-heart"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection
