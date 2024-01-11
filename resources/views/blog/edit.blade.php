@extends('master')

@section('bitm')
    Edit Blog Page
@endsection


@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Blog Page</div>
                        <div class="card-body"></div>
                        <form action="{{ route('blog.update') }}" method = "POST">
                            @csrf
                            <input type="hidden" value="{{$blog->id}}" name="id">
                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Title</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" value="{{$blog->title}}" name="title"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Description</label>
                                <div class = "col-md-9">
                                    <textarea  class="form-control" name="description">{{$blog->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Image</label>
                                <div class = "col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->image}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class = "col-lg-3"></label>
                                <div class = "col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
