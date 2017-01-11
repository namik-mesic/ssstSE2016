<!-- Damir Cengic -->

@extends ('layouts.app')
@section ('content')

<div class="box box-widget widget-user-2">
            
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                 <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="img-circle" alt="User Image">
                 </div>
          
              <h1>&nbsp; Welcome, {{ $name }} {{$lastname}}</h1> </div>
            <div class="box-footer no-padding">
            </div>
          </div>



         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h4>Send an Email</h4>
</br></br>
              
            </div>
            <div class="icon">
            <i class="ion-ios-paperplane"></i>
            </div>
            <a href="/mail/create" class="small-box-footer"><i style="color: white;" class="fa fa-plus fa-2x"></i>
             
            </a>
          </div>
        </div>



         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h4>Start a Campaign</h4>
</br></br>
             
            </div>
            <div class="icon">
              <i class="ion-calendar"></i>
            </div>
            <a href="/schedules" class="small-box-footer"><i style="color: white;" class="fa fa-plus fa-2x"></i>
             
            </a>
          </div>
        </div>

          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>Add a Client</h4>
</br></br>
          
            </div>
            <div class="icon">
             <i class="ion ion-person-add"></i>
            </div>
            <a href="/client/create" class="small-box-footer"><i style="color: white;" class="fa fa-plus fa-2x"></i>
             
            </a>
          </div>
        </div>


  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>Create a List</h4>

          </br></br> 
            </div>
            <div class="icon">
              <i class="ion-ios-paper"></i>
            </div>
          <a href="/mailinglist/create" class="small-box-footer"><i style="color: white;" class="fa fa-plus fa-2x"></i>
             
            </a>
          </div>
        </div>


        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h2 style="color: white;">Settings</h2>
<p style="color: white;"> Change your account settings here </p>
            </div>
            <div class="icon">
             <i class="ion-ios-gear" style="color:white;"></i>
            </div>
            <a href="/settings" class="small-box-footer"><i style="color: white;" class="fa fa-cog fa-2x"></i>
             
            </a>
          </div>
        </div>

          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h2 style="color: white;">Help</h2>
<p style="color: white;"> Get help with issues here. </p>
            </div>
            <div class="icon">
             <i class="ion-help-buoy" style="color:white;"></i>
            </div>
            <a href="/help" class="small-box-footer"><i style="color: white;" class="fa fa-life-ring fa-2x"></i>
             
            </a>
          </div></div></div></div>
        

        @stop