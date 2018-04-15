@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Services</h4> </div>
        <a href="{{ url('/admin/serviceCreate') }}"><button type="button" class="btn btn-success pull-right">Add Service</button></a>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Services</h3><hr>
                <h3 class="box-title">AZE</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>

                                <td>{{ $service->id }}</td>
                                <td>{{ $service->serv_title_az }}</td>
                                 <td>{!! substr(($service->serv_desc_az),0,100) !!}</td>
                                <td>{{ $service->serv_image }}</td>
                                <td>{{ $service->serv_icon }}</td>
                                <td>
                                    <a href="/admin/service/{{ $service->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/service/{{ $service->id }}/delete" method="post">
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

                <h3 class="box-title">ENG</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>

                                <td>{{ $service->id }}</td>
                                <td>{{ $service->serv_title_en }}</td>
                                <td>{!! substr(($service->serv_desc_en),0,100) !!}</td>
                                <td>{{ $service->serv_image }}</td>
                                <td>{{ $service->serv_icon }}</td>
                                <td>
                                    <a href="/admin/service/{{ $service->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/service/{{ $service->id }}/delete" method="post">
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


                <h3 class="box-title">RUS</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>

                                <td>{{ $service->id }}</td>
                                <td>{{ $service->serv_title_ru }}</td>
                                <td>{!! substr(($service->serv_desc_ru),0,100) !!}</td>
                                <td>{{ $service->serv_image }}</td>
                                <td>{{ $service->serv_icon }}</td>
                                <td>
                                    <a href="/admin/service/{{ $service->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/service/{{ $service->id }}/delete" method="post">
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