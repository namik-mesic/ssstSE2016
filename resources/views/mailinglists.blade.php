<div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Date Added</th>
                  <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John.doe@gmail.com</td>
                  <td>John
                  </td>
                  <td>Doe</td>
                  <td>27.03.1992</td>
                  <td><a href="#"><i class="fa fa-pencil"></i> </a><a href="#"> <i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
              <?php $results = DB::select('select * from mailing_list where user_id = 1', array(1));
                 dd($results); ?>

                  <td><a href="#"><i class="fa fa-pencil"></i> </a><a href="#"> <i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <td>Dummy</td>
                  <td>Dummy
                  </td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                 
                  <td><a href="#"><i class="fa fa-pencil"></i> </a><a href="#"> <i class="fa fa-trash"></i></a></td>
                </tr>
 
                </tbody>
                <tfoot>
                   <tr>
                  <th>Email</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Date Added</th>
                  <th>Edit/Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="md-col-4">
          <div class="box">
            
            <a href="#" class="btn btn-app"> <i class="fa fa-plus"></i></a>
<div class="md-col-6"><form>
  <label> Add new user </label>

<label>Email</label>
  <input type="email" name="Email" placeholder="Enter here..." class="form-control">
<label>Name</label>
  <input type="text" name="Name" placeholder="Enter here..." class="form-control">
  <label>Surname</label>
  <input type="text" name="Surname" placeholder="Enter here..." class="form-control">
</div>


                <a href="#" class="btn btn-info">Add</a>
</form></div>
          </div>
          <!-- /.box -->
     