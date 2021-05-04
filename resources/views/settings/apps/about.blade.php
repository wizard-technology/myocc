@extends('settings.layout.app',['title' => 'Dashboard'])
@section('title')
<div class="card-header bg-white">
    <h3 class="pt-3">About</h3>
    <ul class="breadcrumb  bg-white p-0 pt-3 ">
        <li class="breadcrumb-item">Application</li>
        <li class="breadcrumb-item">Settings</li>
        <li class="breadcrumb-item active"><a href="{{route('dashboard.about.index')}}">About</a></li>
    </ul>
</div>
@endsection
@section('content')
@include('settings.layout.messages')
<div class="row">
    {{-- Add Photo Banner --}}
    {{-- Edit Photo --}}
    <div class="col-lg-6">

        <form action="{{route('dashboard.about.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" value="{{ $about->title }}" class="form-control" name="title" id="title"
                        placeholder="Title" required>
                </div>
                <textarea name="description" class="form-control summernote">{{ $about->desc }}</textarea>
                {{-- <div class="mt-3 form-group">
                    <input name="imgs" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div> --}}
                <div class="mt-3 form-group">
                    <input type="submit" class="btn btn-success mb-3 float-right" value="Edit Image">
                </div>
            </div>
        </form>
        {{-- <a href="{{ secure_asset('storage/'. $about->image)}}" target="_blank" rel="noopener noreferrer"><img
            src="{{ secure_asset('storage/'. $about->image)}}" alt="" style="width:200px;height:200px;"></a> --}}
    </div>
    <div class="col-lg-6">

        <form action="{{route('dashboard.about.store_footer')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <div class="form-group">
                    <label for="footer_title">Footer Title: </label>
                    <input type="text" value="{{ $about->footer_title }}" class="form-control" name="footer_title"
                        id="footer_title" placeholder="Footer Title" required>
                </div>
                <textarea name="footer_description" class="form-control">{{ $about->footer_desc }}</textarea>

                <input type="submit" class="btn btn-success mt-3 float-right" value="Edit Footer">
            </div>
        </form>
    </div>
</div>
@endsection