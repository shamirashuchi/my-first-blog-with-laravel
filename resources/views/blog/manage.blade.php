@extends('master')

@section('bitm')
    Manage Blog page
@endsection


@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class=" mx-auto">
                    <div class="card">
                        <div class="card-header"><span>Manage Blog Page</span>
                        <span class="text-danger d-block text-end">{{session('message')}}</span>
                        </div>
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
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="image not found" style="height: 50px; width: 50px"/>
                                    </td>

                                    <td class="d-flex">
                                           <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success">Edit</a> &nbsp
                                           {{--                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger">Delete</a>--}}
                                           <form action="{{route('blog.delete')}}" method="post">
                                               @csrf
                                               <input type="hidden" value="{{ $blog->id }}" name="id">
                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
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
