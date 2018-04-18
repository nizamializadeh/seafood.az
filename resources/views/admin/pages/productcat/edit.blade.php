@extends('admin.admin')
@section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Product's Category Edit</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /row -->
<div class="row">
    <div class="col-sm-12">
        <div class="">
            <div class="col-md-12 col-xs-12">
                <div class="white-box">
                    <form action="/admin/productcategory/{{ $category->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-12">Name Aze</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ $category->product_cat_az }}" name="name_az" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Name Eng</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ $category->product_cat_en }}" name="name_en" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Name Rus</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ $category->product_cat_ru }}" name="name_ru" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="{{ url('/admin/categories') }}" class="btn btn-warning">Cancel</a>
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
