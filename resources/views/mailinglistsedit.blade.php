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

            <!-- By Sabahudin Kodro, Display MailingList-->
            <tr>

                <td></td>  <!-- By Sabahudin Kodro, Display MailingList-->
                <td></td> <!-- By Sabahudin Kodro, Display MailingList-->
                <td></td> <!-- By Sabahudin Kodro, Display MailingList-->
                <td></td> <!-- By Sabahudin Kodro, Display MailingList-->

                <td><a href="#"><i class="fa fa-pencil"></i> </a><a href="#"> <i class="fa fa-trash"></i></a></td>
            </tr>
             <!-- By Sabahudin Kodro, Display MailingList-->


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


            <p class="alert> </p>


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
     