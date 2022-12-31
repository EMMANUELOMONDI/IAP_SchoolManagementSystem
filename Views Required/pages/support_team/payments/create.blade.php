@extends('layouts.master')
@section('page_title', 'Create Payment')
@section('content')

    <div class="card bg-dark">
        <div class="card-header header-elements-inline bg-dark">
            <h6 class="card-title" style="position: relative; left: 450px">Create Payment</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

       <div class="card-body"bg-image
  style="
    background-image: url('https://static.vecteezy.com/system/resources/previews/002/309/065/original/black-and-white-gradient-modern-geometrical-abstract-background-texture-geometric-background-with-gradient-free-vector.jpg');
    top:600vh;
  "
>
            <div class="row text-dark">
                <div class="col-md-6">
                    <form class="ajax-store" method="post" action="{{ route('payments.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Title <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="Eg. School Fees">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Class </label>
                            <div class="col-lg-9">
                                <select class="form-control select-search" name="my_class_id" id="my_class_id">
                                    <option value="">All Classes</option>
                                    @foreach($my_classes as $c)
                                        <option {{ old('my_class_id') == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="method" class="col-lg-3 col-form-label font-weight-semibold">Payment Method</label>
                            <div class="col-lg-9">
                                <select class="form-control select" name="method" id="method">
                                    <option selected value="Cash">Cash</option>
                                    <option disabled value="Online">Online</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold">Amount <span class="text-danger"> in Ksh</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('amount') }}" required name="amount" id="amount" type="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('description') }}" name="description" id="description" type="text">
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Payment Create Ends--}}

@endsection
