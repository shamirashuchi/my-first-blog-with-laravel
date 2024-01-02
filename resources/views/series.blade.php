@extends('master')

@section('bitm')
    Contact Page
@endsection


@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 bg-secondary-subtle shadow">
                        <form action="{{route('make-series')}}" method = "POST">
                            @csrf
                            <div class="row mb-3">
                                <label class = "col-lg-3">First Number</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" name="first_number"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class = "col-lg-3">Last Number</label>
                                <div class = "col-md-9">
                                    <input type="text" class="form-control" name="last_number"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class = "col-lg-3">Your choice</label>
                                <div class = "col-md-9">
                                    <label><input type="radio" name="choice" value="odd"/> odd</label>
                                    <label><input type="radio" name="choice" value="even"/> even</label>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class = "col-lg-3">The series</label>
                                <div class = "col-md-9">
                                    <input type="text" value="{{session('message')}}" class="form-control" name="the-series"/>
                                </div>
                            </div>
                            <div class = " col-lg-4 ms-auto">
                                <input type="submit" class="btn btn-success" value="Make series"/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection

