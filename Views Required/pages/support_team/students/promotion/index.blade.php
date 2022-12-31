@extends('layouts.master')
@section('page_title', 'Student Promotion')
@section('content')

    <div class="card bg-dark text-dark">
        <div class="card-header header-elements-inline bg-dark">
            <h5 class="card-title font-weight-semibold" style="left: 330px; position:relative; ">Student Promotion From <span class="text-danger">{{ $old_year }}</span> TO <span class="text-success">{{ $new_year }}</span> Session</h5>
            {!! Qs::getPanelOptions() !!}
        </div>

         <div class="card-body"bg-image
                    style="
                    background-image: url('https://static.vecteezy.com/system/resources/previews/002/309/065/original/black-and-white-gradient-modern-geometrical-abstract-background-texture-geometric-background-with-gradient-free-vector.jpg');
                    top:600vh;
                        "
                        >">
            @include('pages.support_team.students.promotion.selector')
        </div>
    </div>

    @if($selected)
    <div class="card">
        <div class="card-header header-elements-inline ">
            <h5 class="card-title font-weight-bold">Promote Students From <span class="text-dark">{{ $my_classes->where('id', $fc)->first()->name.' '.$sections->where('id', $fs)->first()->name }}</span> TO <span class="text-purple">{{ $my_classes->where('id', $tc)->first()->name.' '.$sections->where('id', $ts)->first()->name }}</span> </h5>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body text-dark">
            @include('pages.support_team.students.promotion.promote')
        </div>
    </div>
    @endif


    {{--Student Promotion End--}}

@endsection
