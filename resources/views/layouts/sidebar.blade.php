
<!-- Damir Čengić  and Dino Kodro-->


<!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>QUERRY NAMESURNAME</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> STATUS QUERRY</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="/dashboard"><i class="fa fa-th-large"></i></i><span>Dashboard</span></a></li>
                   
                       <li class="treeview-active"><a href="#"><i class="fa fa-envelope"></i> <span>Mails</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span></a>
                         <ul class="treeview-menu" style="display: none;">
                            <li><a href="../mails"><i class="fa fa-comments"></i>All Mails</a></li>
                            <li><a href="../mail/create"><i class="fa fa-plus"></i>Create New</a></li>
                         </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-calendar"></i> <span>Schedules</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span></a>
                         <ul class="treeview-menu" style="display: none;">
                            <li><a href="../schedules"><i class="fa fa-calendar-plus-o"></i>Set up schedules</a></li>
                            <li><a href="../schedule/archived"><i class="fa fa-calendar-check-o"></i>Archived schedules</a></li>
                         </ul>
                    </li>
                       
                    
                    <li><a href="/mailinglists"><i class="fa fa-address-book"></i><span>Mailing lists</span></a></li>
                    <li><a href="/clients"><i class="fa fa-users"></i><span>Clients</span></a></li>
                    <li><a name="settings" href="/settings"><i class="fa fa-cog"></i><span>Settings</span></a></li>
                    <li><a name="Help" href="/help"><i class="fa fa-life-ring"></i><span>Help</span></a></li>
                    <li><a href="logout"><i class="fa fa-sign-out"></i><span>Log Out</span></a></li>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>