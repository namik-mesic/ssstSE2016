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

                @foreach ($mailinglists as $mailinglist) <!-- By Sabahudin Kodro, Display MailingList-->
                <tr>

                  <td>{{$mailinglist -> mail}}</td>  <!-- By Sabahudin Kodro, Display MailingList-->
                  <td>{{$mailinglist -> fname}}</td> <!-- By Sabahudin Kodro, Display MailingList-->
                  <td>{{$mailinglist -> lname }}</td> <!-- By Sabahudin Kodro, Display MailingList-->
                  <td>{{$mailinglist -> created_at}} </td> <!-- By Sabahudin Kodro, Display MailingList-->

                  <td><a href="#"><i class="fa fa-pencil"></i> </a><a href="#"> <i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach <!-- By Sabahudin Kodro, Display MailingList-->

 
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
<div class="md-col-6">

  <label> Add new user </label>

    @if(Session::has('success')) <!-- By Sabahudin Kodro, Display message when user is succesfully added-->
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
    @endif <!-- By Sabahudin Kodro, Display message when user is succesfully added-->

  <form method="post" action="store">

        <label>Email</label>
      <input type="email" name="mail" placeholder="Enter here..." class="form-control">

        <label>Name</label>

      <input type="text" name="fname" placeholder="Enter here..." class="form-control">

        <label>Surname</label>

      <input type="text" name="lname" placeholder="Enter here..." class="form-control">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="submit" name="submit" value="store" class="btn btn-info">
  </form>


    </div>




          </div>
          </div>
          <!-- /.box -->
     