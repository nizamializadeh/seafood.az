@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product Edit</h4> </div>
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
                        <form action="/admin/product/{{ $product->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-12">Name AZE</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_name_az }}" name="name_az" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Name ENG</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_name_en }}" name="name_en" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Name RUS</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_name_ru }}" name="name_ru" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Details AZE</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_details_az }}" name="details_az" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Details ENG</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_details_en }}" name="details_en" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Details RUS</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->product_details_ru }}" name="details_ru" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description AZE</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_az" class="form-control summernote form-control-line"> {{ $product->product_desc_az }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description ENG</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_en" class="form-control summernote form-control-line"> {{ $product->product_desc_en }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description RUS</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_ru" class="form-control summernote form-control-line"> {{ $product->product_desc_ru }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Price</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $product->price }}" name="price" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Select Category</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line" name="category_id" >
                                        {{--   <option value="disabled" class="disabled">{{ $blog->category->cat_name_az }}</option> --}}
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->product_cat_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Image</label>
                                <div class="col-sm-12">
                                    <input type="file" name="img"  class="form-control form-control-line btn btn-primary"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="{{ url('/admin/products-admin') }}" class="btn btn-warning">Cancel</a>
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