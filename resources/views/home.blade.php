@extends('layout.app')



@section('content')

@include('inc.showcase')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
           <h1>HOME</h1>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam, fuga id vitae ipsa amet nobis voluptatem cumque, expedita sint ex nemo saepe porro laudantium quas ipsum necessitatibus dolores odio!</p>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate veniam asperiores dolor placeat, tempora culpa quibusdam laudantium laboriosam doloribus consequuntur possimus quidem? Ea sed facere culpa! Officiis itaque pariatur laudantium?</p>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate veniam asperiores dolor placeat, tempora culpa quibusdam laudantium laboriosam doloribus consequuntur possimus quidem? Ea sed facere culpa! Officiis itaque pariatur laudantium?</p>
        </div>
        <div class="col-md-4 col-lg-4">
           <div class="well">
               <h1>SIDEBAR</h1>
               <ul class="list-unstyled quick-links">
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul>
           </div>
        </div>
    </div>
</div>
@endsection