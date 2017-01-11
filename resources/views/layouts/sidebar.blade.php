
<!-- Damir Čengić  and Dino Kodro--> <!-- complete re-edit: Damir Cengic -->

<?php $routeName =  \Illuminate\Support\Facades\Route::getFacadeRoot()->current()->getName() ?>


<!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                

                <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <!-- Optionally, you can add icons to the links -->

                   <!-- <li><a href="/dashboard"><i class="fa fa-th-large"></i></i><span>Dashboard</span></a></li>-->
<li class="{{ $routeName == 'dashboard' ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fa fa-th-large"></i><span> Dashboard </span></a> </li> 


<li class="treeview-active"><a href="schedules"><i class="fa fa-envelope"></i> <span> Mails</span>
<span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span></a>
<ul class="treeview-menu" style="display: none;">
<li class="{{ $routeName == 'mails' ? 'active' : '' }}"><a href="{{ route('mails') }}"><i class="fa fa-envelope"></i><span> All Mail </span></a></li>
<li class="{{ $routeName == 'mail.create' ? 'active' : '' }}"><a href="{{ route('mail.create') }}"><i class="fa fa-plus"></i><span> Create New </span></a></li></ul></li>

 <li class="treeview"><a href="/schedules"><i class="fa fa-calendar"></i>  <span>Schedules</span>
<span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span></a>
<ul class="treeview-menu" style="display: none;">

<li class="{{ $routeName == 'schedule.create' ? 'active' : '' }}"><a href="{{ route('schedule.create') }}"><i class="fa fa-calendar-plus-o"></i><span>Set up Schedules </span></a></li>

<li class="{{ $routeName == 'schedules' ? 'active' : '' }}"><a href="{{ route('schedules') }}"><i class="fa fa-calendar-check-o"></i><span> Pending Schedules </span></a></li>

<li class="{{ $routeName == 'schedule.archived' ? 'active' : '' }}"><a href="{{ route('schedule.archived') }}"><i class="fa fa-calendar-check-o"></i><span> Archived Schedules </span></a></li>
                         </ul>
                    </li>
                
<li class="{{ $routeName == 'mailinglists' ? 'active' : '' }}"><a href="{{ route('mailinglists') }}"><i class="fa fa-address-book"></i> Mailing Lists</a></li>
<li class="{{ $routeName == 'clients' ? 'active' : '' }}"><a href="{{ route('clients') }}"><i class="fa fa-users"></i><span> Clients</span></a></li>
<li class="{{ $routeName == 'settings' ? 'active' : '' }}"><a href="{{ route('settings') }}"><i class="fa fa-cog"></i><span> Settings</span></a></li>
<li><a name="Help" href="/help"><i class="fa fa-life-ring"></i><span>Help</span></a></li>
<li class="{{ $routeName == 'logout' ? 'active' : '' }}"><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i><span> Log Out</span></a></li>

                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>