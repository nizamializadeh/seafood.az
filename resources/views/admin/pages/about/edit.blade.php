@extends('admin.admin')
@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">About Edit</h4> </div>
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
                        <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-12">Title AZE</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $about->about_title_az }}" name="title_az" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Title ENG</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $about->about_title_en }}" name="title_en" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Title RUS</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $about->about_title_ru }}" name="title_ru" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Text AZE</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="text_az" class=" summernote form-control form-control-line"> {{ $about->about_text_az }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Text ENG</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="text_en" class="summernote form-control form-control-line"> {{ $about->about_text_en }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Text RUS</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="text_ru"  class="summernote form-control form-control-line"> {{ $about->about_text_ru }}</textarea>
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
                                    <a href="{{ url('/admin/about-admin') }}" class="btn btn-warning">Cancel</a>
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
