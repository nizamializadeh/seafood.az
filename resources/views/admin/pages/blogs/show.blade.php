@extends('admin.admin')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Title</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h1>{{ $blog->blog_title_az }} <small>AZE</small></h1>
                <h1>{{ $blog->blog_title_en }} <small>ENG</small></h1>
                <h1>{{ $blog->blog_title_ru }} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Text</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h4>{!! $blog->blog_text_az !!} <small>AZE</small></h1>
                    <h4>{!! $blog->blog_text_en !!} <small>ENG</small></h1>
                        <h4>{!! $blog->blog_text_ru !!} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Image</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <img src="{{ url('/images/'.$blog->blog_image) }}" class="img-responsive">

            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Keywords</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $blog->keywords }}</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Category</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $blog->blog_category->blog_cat_name_az }}</p>
            </div>
        </div>
    </div>
    <a href="{{ url('/admin/blogs-admin') }}" class="btn btn-warning">Cancel</a>
    <a href="/admin/blog/{{ $blog->id }}/edit">
        <button type="button" class="btn btn-primary">Edit</button>
    </a>



@endsection