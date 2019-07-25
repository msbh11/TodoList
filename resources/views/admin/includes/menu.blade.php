<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Task Manager <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-task')}}">Add Task</a>
                    </li>
                    <li>
                        <a href="{{ route('manage-task')}}">Manage Task</a>
                    </li>
                    <li>
                        <a href="{{ route('history')}}">History</a>
                    </li>
                </ul>

                 <li>
                    <a href="#" onclick="document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                       @csrf
                    </form>

                 </li>
                 
                       
             
                
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>