@extends('admin.admin')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Blogs</h4> </div>
        <a href="{{ url('/admin/blogcatCreate') }}"><button type="button" class="btn btn-primary">Add Category</button></a>&nbsp
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
                            <th>Image Alt</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Keywords</th>
                            <th>Counts</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($blogs as $blog)--}}
                            {{--<tr>--}}

                                {{--<td>{{ $blog->id }}</td>--}}
                                {{--<td>{{ $blog->title_az }}</td>--}}
                                {{-- <td>{!! substr(($blog->text_az),0,400) !!}</td> --}}
                                {{--<td>{{ $blog->image }}</td>--}}
                                {{--<td>{{ $blog->image_alt }}</td>--}}
                                {{--<td>{{ $blog->category->cat_name_az }}</td>--}}
                                {{--<td>--}}
                                    {{--@foreach($blog->tag as $tag)--}}
                                        {{--<span class="label label-default">#{{ $tag->tag_name_az }}</span><br>--}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                                {{--<td>{{ substr(($blog->keywords),0,70) }}</td>--}}
                                {{--<td>{{ $blog->count }}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="show/{{ $blog->id }}">--}}
                                        {{--<button type="button" class="btn btn-success"><i class="fas fa-eye"></i>--}}
                                        {{--</button>--}}
                                    {{--</a><br>--}}
                                    {{--<a href="/blog/{{ $blog->id }}/edit">--}}
                                        {{--<button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>--}}
                                    {{--</a>--}}
                                    {{--<form action="blog/{{ $blog->id }}/delete" method="post">--}}
                                        {{--{{method_field('DELETE')}}--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
                                    {{--</form>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection