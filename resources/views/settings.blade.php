
@extends ('layouts.app')
@section ('content')
 <!-- Damir Čengić -->

  <div class="col-md-12">
 <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              
            </div>
            <div class="widget-user-image">
            <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="img-circle" alt="User Image" />
             
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h2 class="widget-user-username">{{$name}} {{$lastname}}</h2>
              <h4 class="widget-user-desc">SETTINGS</h4>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>


  </div>


  <form role="form">
              <div class="box-body">
              <div class="col-md-6">
              
                   <div class="form-group">
                  <label for="fname">First name</label>
                  <input type="text" class="form-control" id="fname" placeholder="{{$name}}">
                </div>
                   <div class="form-group">
                  <label for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname" placeholder="{{$lastname}}">
                </div>
                   <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="{{$name}}">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="currentpass">Verify password</label>
                  <input type="password" class="form-control" id="currentpass" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <label for="newpass">New password</label>
                  <input type="password" class="form-control" id="newpass" placeholder="New Password">
                </div> </div>
                <div class="col-md-3">
                <ul><li>One lowercase letter</li>
                <li>One uppercase letter</li>
                <li>One number</li>
                </ul> </div>
                <div class="col-md-3">
                <ul>
                <li>One special character</li>
                <li>8 characters minimum</li>
                </ul>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="cnewpass">Confirm new password</label>
                  <input type="password" class="form-control" id="cnewpass" placeholder="Confirm New Password">
                  </div>
                </div>
                </div>
                <div class="col-md-12"><button class="btn btn-block btn-info btn-lg">Update</button></div>
  </form>

              </div>

              @stop