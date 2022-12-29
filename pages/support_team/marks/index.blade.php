@extends('layouts.master')
@section('page_title', 'Manage Exam Marks')
@section('content')
    <div class="card bg-dark">
        <div class="card-header header-elements-inline bg-dark">
            <h5 class="card-title font-weight-semibold" style="left: 400px; position:relative;"><i class="icon-books mr-2"></i> Manage Exam Marks</h5>
            {!! Qs::getPanelOptions() !!}
        </div>

           <div class="card-body text-dark"bg-image
                    style="
                    background-image: url('https://static.vecteezy.com/system/resources/previews/002/309/065/original/black-and-white-gradient-modern-geometrical-abstract-background-texture-geometric-background-with-gradient-free-vector.jpg');
                    top:600vh;
                        "
                        >
            @include('pages.support_team.marks.selector')
        </div>
    </div>
    @endsection
