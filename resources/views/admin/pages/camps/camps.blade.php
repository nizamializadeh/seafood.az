@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Camps</h4> </div>
        <a href="{{ url('/admin/campCreate') }}"><button type="button" class="btn btn-success pull-right">Add Camp</button></a>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Blogs</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($camps as $camp)
                            <tr>
                                <td>{{ $camp->id }}</td>
                                <td>{{ $camp->camp_title_az }}</td>
                                <td>{!! substr(($camp->camp_desc_az),0,200) !!}</td>
                                <td>{{ $camp->date }}</td>
                                <td>{{ $camp->location }}</td>
                                <td>{{ $camp->camp_image }}</td>
                                <td>
                                    <a href="/admin/show/camp/{{ $camp->id }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </a><br>
                                    <a href="/admin/camp/{{ $camp->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/camp/{{ $camp->id }}/delete" method="post">
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