@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product's Category Create</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-12 col-xs-12">
                <div class="white-box">
                    <form action="/admin/productcategory-create" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="col-md-12">Name AZE</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name AZE" name="name_az" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Name ENG</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name ENG" name="name_en" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Name RUS</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name RUS" name="name_ru" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="{{ url('/admin/categories') }}" class="btn btn-warning">Cancel</a>
                                <button class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection