@extends('master')

@section('bitm')
    Manage Blog page
@endsection


@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Blog Page</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>SI</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->image}}</td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
