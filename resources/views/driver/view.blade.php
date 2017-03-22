@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="label-info"></h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Drivers
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!--  -->
                <!-- Nav tabs -->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#home-pills" data-toggle="tab">List Drivers</a>
                </li>
                <li><a href="#profile-pills" data-toggle="tab">Profile</a>
            </li>
            <li><a href="#messages-pills" data-toggle="tab">Messages</a>
        </li>
        <li><a href="#settings-pills" data-toggle="tab">Settings</a>
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="home-pills">

        <p>
            <div class="alert" id="flash_message" style="display:none">
            </div>
            <table width="100%" class="table table-striped table-bordered table-hover" id="users-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Age</th>

                        <th></th>
                    </tr>
                </thead>
            </table>
            @include('driver.edit')
        </p>
    </div>
    <div class="tab-pane fade" id="profile-pills">
        <h4>Profile Tab</h4>
        <p>
        </p>
    </div>
    <div class="tab-pane fade" id="messages-pills">
        <h4>Messages Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="tab-pane fade" id="settings-pills">
        <h4>Settings Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<script type="text/javascript" src="{{ URL::asset('/js/app/driver/app.driver.driver.js') }}"></script>
@endsection