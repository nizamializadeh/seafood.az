@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Blog's Categories</h4> </div>
        <a href="{{ url('/admin/blogcategoryCreate') }}"><button type="button" class="btn btn-success pull-right">Add Category</button></a>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Blog's Categories</h3><hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name AZE</th>
                            <th>Name ENG</th>
                            <th>Name RUS</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->blog_cat_name_az }}</td>
                                <td>{{ $category->blog_cat_name_en }}</td>
                                <td>{{ $category->blog_cat_name_ru }}</td>
                                <td>
                                    <a href="/admin/blogcategoryedit/{{ $category->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/blogcategory/{{ $category->id }}/delete" method="post">
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