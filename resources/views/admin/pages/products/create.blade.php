@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product Create</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-12 col-xs-12">
                <div class="white-box">
                    <form action="/admin/product-create" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-md-12">Name AZE</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name Aze" name="name_az" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Name ENG</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name Eng" name="name_en" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Name RUS</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name Rus" name="name_ru" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Details AZE</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Details Aze" name="details_az" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Details ENG</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Details Eng" name="details_en" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Details ENG</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Details Eng" name="details_ru" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description AZE</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="desc_az" class="form-control summernote form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description ENG</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="desc_en" class="form-control summernote form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description RUS</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="desc_ru" class="form-control summernote form-control-line"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Price</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Price" name="price" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">Select Category</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line select2" name="categories[]" multiple="multiple">
                                    {{--<option value="disabled" class="disabled">Categories</option>--}}
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->product_cat_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">Quantity type</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line" name="quantity">
                                        <option value="0">KG</option>
                                        <option value="1">Number</option>
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
                                <button class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection




