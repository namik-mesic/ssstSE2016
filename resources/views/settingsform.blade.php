  <div class="col-md-12">
 <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">John Doe</h3>
              <h5 class="widget-user-desc">Golden member</h5>
            </div>
            <div class="widget-user-image">
            <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="img-circle" alt="User Image" />
             
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">Emails sent</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">4</h5>
                    <span class="description-text">Campaigns</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">2,500</h5>
                    <span class="description-text">Users</span>
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
                  <label for="Username">Username</label>
                  <input type="text" class="form-control" id="Username" placeholder="Astipak">
                </div>
                   <div class="form-group">
                  <label for="fname">First name</label>
                  <input type="text" class="form-control" id="fname" placeholder="John">
                </div>
                   <div class="form-group">
                  <label for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Doe">
                </div>
                   <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="currentpass">Verify password</label>
                  <input type="password" class="form-control" id="currentpass" placeholder="">
                </div>
                <div class="form-group">
                  <label for="newpass">New password</label>
                  <input type="password" class="form-control" id="newpass" placeholder="">
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
                  <input type="password" class="form-control" id="cnewpass" placeholder="">
                  </div>
                </div>
                </div>
                <div class="col-md-12"><button class="btn btn-block btn-info btn-lg">Update</button></div>
  </form>

              </div>

