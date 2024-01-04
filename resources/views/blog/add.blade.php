@extends('master')

@section('bitm')
    Add blog
@endsection


@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Blog Page</div>
                        <div class="card-body"></div>
                        <form action=" " method = "POST">
                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Title</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Description</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" name="description"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class = "col-lg-3">Blog Image</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class = "col-lg-3"></label>
                                <div class = "col-md-9">
                                    <input type="submit" class="btn btn-success" value="create New Blog"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
