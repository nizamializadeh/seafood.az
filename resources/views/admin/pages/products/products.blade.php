@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Products</h4> </div>
        <a href="{{ url('/admin/productCreate') }}"><button type="button" class="btn btn-success pull-right">Add Product</button></a>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Products</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Activity</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name_az }}</td>
                                <td>{!! substr(($product->product_details_az),0,100) !!}</td>
                                <td>{{ $product->price }} AZN</td>
                                <td>
                                    @if($product->activity == '1')
                                        <form action="/admin/product/{{ $product->id }}/busy" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                            {{ method_field('PATCH') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-primary">Available</button>
                                        </form>
                                    @endif
                                        @if($product->activity == '0')
                                            <form action="/admin/product/{{ $product->id }}/available" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                                {{ method_field('PATCH') }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger">Busy</button>
                                            </form>
                                        @endif
                                </td>
                                <td>
                                    <a href="/admin/show/product/{{ $product->id }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </a><br>
                                    <a href="/admin/product/{{ $product->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/product/{{ $product->id }}/delete" method="post">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection