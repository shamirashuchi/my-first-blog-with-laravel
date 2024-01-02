@extends('master')

@section('bitm')
    About Page
@endsection

@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset($blog['image'])}}" alt=""/>
                        <div class="card-body">
                            <h4>{{($blog['title'])}}</h4>
                            <p>{{($blog['description'])}}</p>
                        <hr/>
                            <a href="{{route('detail',['id' => $blog['id']])}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


