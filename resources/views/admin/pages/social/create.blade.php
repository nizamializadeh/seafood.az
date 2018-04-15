@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Social Create</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-12 col-xs-12">
                <div class="white-box">
                    <form action="/admin/social-create" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="col-md-12">Link</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Link" name="link" class="form-control form-control-line">
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
                                <a href="{{ url('/admin/socials') }}" class="btn btn-warning">Cancel</a>
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