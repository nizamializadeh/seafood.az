@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Blogs</h4> </div>
        <a href="{{ url('/admin/blogCreate') }}"><button type="button" class="btn btn-success pull-right">Add Blog</button></a>
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
                             <th>Text</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Keywords</th>
                            <th>Counts</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->blog_title_az }}</td>
                                 <td>{!! substr(($blog->blog_text_az),0,200) !!}</td>
                                <td>{{ $blog->blog_image }}</td>
                                <td>{{ $blog->blog_category->blog_cat_name_az }}</td>
                                <td>{{ substr(($blog->keywords),0,70) }}</td>
                                <td>{{ $blog->count }}</td>
                                <td>
                                    <a href="/admin/show/{{ $blog->id }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </a><br>
                                    <a href="/admin/blog/{{ $blog->id }}/edit">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="/admin/blog/{{ $blog->id }}/delete" method="post">
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