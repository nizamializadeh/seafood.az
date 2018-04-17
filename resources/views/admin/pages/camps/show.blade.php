@extends('admin.admin')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Title</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h1>{{ $camp->camp_title_az }} <small>AZE</small></h1>
                <h1>{{ $camp->camp_title_en }} <small>ENG</small></h1>
                <h1>{{ $camp->camp_title_ru }} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Text</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <h4>{!! $camp->camp_desc_az !!} <small>AZE</small></h1>
                    <h4>{!! $camp->camp_desc_en !!} <small>ENG</small></h1>
                        <h4>{!! $camp->camp_desc_ru !!} <small>RUS</small></h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Image</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <img src="{{ url('/images/'.$camp->camp_image) }}" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Date</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $camp->date }}</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Time</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $camp->time }}</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Location</h3>
        </div>
        <div class="panel-body">
            <div class="page-header">
                <p>{{ $camp->location }}</p>
            </div>
        </div>
    </div>

    <a href="{{ url('/admin/camps-admin') }}" class="btn btn-warning">Cancel</a>
    <a href="/admin/camp/{{ $camp->id }}/edit">
        <button type="button" class="btn btn-primary">Edit</button>
    </a>



@endsection