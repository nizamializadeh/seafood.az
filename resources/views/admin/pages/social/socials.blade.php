@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Socials</h4> </div>
        <a href="{{ url('/admin/socialCreate') }}"><button type="button" class="btn btn-success pull-right">Add Social</button></a>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Socials</h3>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Link</th>
                            <th>Icon</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $social)
                            <tr>
                                <td>{{ $social->id }}</td>
                                <td><a href="{{ $social->link }}" target="_blank">{{ $social->link }}</a></td>
                                <td>{!! $social->icon !!}</td>
                                <td>
                                    <a href="/admin/social/{{ $social->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/social/{{ $social->id }}/delete" method="post">
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