@extends('master')

@section('bitm')
    Blog detail  Page
@endsection

@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">

                    <div class="col-md-6">
                        <div class="card card-body">
                            <img src="{{asset($blog['image'])}}" alt=""/>
                        </div>
                    </div>
            <div class="col-md-6">
                <div class="card card-body">
                                <h4>{{($blog['title'])}}</h4>
                                <p>{{($blog['description'])}}</p>
                                <hr/>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
@endsection
