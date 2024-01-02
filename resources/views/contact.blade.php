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
                      <form action="{{route('make-full-name')}}" method = "POST">
                          @csrf
                          <div class="row mb-3">
                          <label class = "col-lg-3">First Name</label>
                          <div class = "col-md-9">
                              <input type="text" class="form-control" name="first_name"/>
                          </div>
                      </div>

                          <div class="row mb-3">
                              <label class = "col-lg-3">Last Name</label>
                              <div class = "col-md-9">
                                  <input type="text" class="form-control" name="last_name"/>
                              </div>
                          </div>

                          <div class="row mb-3">
                              <label class = "col-lg-3">Full Name</label>
                              <div class = "col-md-9">
                                  <input type="text" value="{{session('message')}}" class="form-control" name="full_name"/>
                              </div>
                          </div>
                              <div class = " col-lg-4 ms-auto">
                                 <input type="submit" class="btn btn-success" value="Make Full Name"/>
                              </div>

                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection

