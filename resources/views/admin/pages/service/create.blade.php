@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Service</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-12 col-xs-12">
                <div class="white-box">
                    <form action="/admin/service-create" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-md-12">Title AZE</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Title Aze" name="title_az" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Title ENG</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Title Eng" name="title_en" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Title RUS</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Title Rus" name="title_ru" class="form-control form-control-line">
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
                            <label class="col-sm-12">Image</label>
                            <div class="col-sm-12">
                                <input type="file" name="img"  class="form-control form-control-line btn btn-primary"><br>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12">Icon</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Icon" name="icon" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="{{ url('/admin/services-admin') }}" class="btn btn-warning">Cancel</a>
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




