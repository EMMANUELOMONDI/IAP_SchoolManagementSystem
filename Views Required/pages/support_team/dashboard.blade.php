@extends('layouts.master')
@section('page_title', 'Current User')
@section('content')

 <div class="page-content class=" bg-image
  style="
    background-image: url('https://cdn.wallpapersafari.com/12/49/e1HDgu.jpg');
    height:86vh;
  "
>

    @if(Qs::userIsTeamSA())
       <div class="mx-auto" style="width: 1000px; text-align: center;">
           <div class="col-sm-6 col-l-3" style="position: relative; left: 250px; top: 40px;">
               <div class="card card-body bg-transparent has-bg-image" style="border: 4px solid #0278ae; border-radius: 25px;">
                   <div class="media" style="color: #0278ae">
                       <div class="media-body">
                           <h3 class="mb-0" style="color: white">{{ $users->where('user_type', 'student')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Students in Course</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-l-3" style="position: relative; left: 250px; top: 40px ">
               <div class="card card-body bg-transparent has-bg-image" style="border: 4px solid #51adcf; border-radius: 25px; ">
                   <div class="media" style="color: #51adcf;  ">
                       <div class="media-body">
                           <h3 class="mb-0" style="color: white">{{ $users->where('user_type', 'teacher')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Teacher In Course</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-l-3" style="position: relative; left: 250px; top: 40px">
               <div class="card card-body bg-transparent has-bg-image" style="border: 4px solid #a5ecd7; border-radius: 25px;">
                   <div class="media" style="color: #a5ecd7;">
                       <div class="media-body">
                           <h3 class="mb-0" style="color: white">{{ $users->where('user_type', 'admin')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Admin In Course</span>
                       </div>

                       <div class="ml-3 align-self-center">
                          
                       </div>
                   </div>
               </div>
           </div>

          <div class="col-sm-6 col-l-3" style="position: relative; left: 250px; top: 40px">>
               <div class="card card-body bg-transparent has-bg-image" style="border: 4px solid #e8ffc1; border-radius: 25px;">
                   <div class="media" style="color: #e8ffc1;">
                       <div class="media-body">
                           <h3 class="mb-0" style="color: white">{{ $users->where('user_type', 'parent')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Parents In Course</span>
                       </div>

                       <div class="ml-3 align-self-center">
                          
                       </div>
                   </div>
               </div>
           </div>


           
       </div>
       @endif
</div>
    
    @endsection
