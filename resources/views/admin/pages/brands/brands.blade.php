
@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Brands</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">


        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form action="/admin/brand-create" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-12">Add Image</label>
                        <div class="col-sm-12">
                            <input type="file" name="img"  class="form-control form-control-line btn btn-primary"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Add Image</button>
                        </div>
                    </div>
                </form>
                <h3 class="box-title">Brands</h3>
                <!-- <p class="text-muted">Add class <code>.table</code></p> -->

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td><img src="{{ '/images/'.$brand->brand_logo }}" alt="" style="width:180px; height:120px;"></td>
                                <td>
                                    <form action="/admin/brand/{{ $brand->id }}/delete" method="post">
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
