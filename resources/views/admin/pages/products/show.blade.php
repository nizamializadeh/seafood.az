@extends('admin.admin')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Name</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h1>{{ $product->product_name_az }} <small>AZE</small></h1>
                <h1>{{ $product->product_name_en }} <small>ENG</small></h1>
                <h1>{{ $product->product_name_ru }} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Details</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h3>{{ $product->product_details_az }} <small>AZE</small></h3>
                    <h3>{{ $product->product_details_en }} <small>ENG</small></h3>
                        <h3>{{ $product->product_details_ru }} <small>RUS</small></h3>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Description</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h4>{!! $product->product_desc_az !!} <small>AZE</small></h1>
                    <h4>{!! $product->product_desc_en !!} <small>ENG</small></h1>
                        <h4>{!! $product->product_desc_ru !!} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Price</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $product->price }}</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Category</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                @foreach($product->categories as $category)
                    <span class="label label-default">{{ $category->product_cat_az }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Activity</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
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
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Quantity type</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                @if($product->quantity_style == '0')
                <p>KQ</p>
                    @endif
                    @if($product->quantity_style == '1')
                        <p>Number</p>
                    @endif
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Image</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <img src="{{ url('/images/'.$product->product_image) }}" class="img-responsive">

            </div>
        </div>
    </div>

    <a href="{{ url('/admin/products-admin') }}" class="btn btn-warning">Cancel</a>
    <a href="/admin/product/{{ $product->id }}/edit">
        <button type="button" class="btn btn-primary">Edit</button>
    </a>



@endsection