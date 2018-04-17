@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Camp Edit</h4> </div>
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
                        <form action="/admin/camp/{{ $camp->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-12">Title AZE</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $camp->camp_title_az }}" name="title_az" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Title ENG</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $camp->camp_title_en }}" name="title_en" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Title RUS</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $camp->camp_title_ru }}" name="title_ru" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description AZE</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_az" class="form-control summernote form-control-line"> {{ $camp->camp_desc_az }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description ENG</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_en" class="form-control summernote form-control-line"> {{ $camp->camp_desc_en }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Description RUS</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="desc_ru" class="form-control summernote form-control-line"> {{ $camp->camp_desc_ru }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Date</label>
                                <div class="col-md-12">
                                    <input type="date" value="{{ $camp->date }}" name="date" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Time</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $camp->time }}" name="time" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Loaction</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $camp->location }}" name="location" class="form-control form-control-line">
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
                                    <a href="{{ url('/admin/camps-admin') }}" class="btn btn-warning">Cancel</a>
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