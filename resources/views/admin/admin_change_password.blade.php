@extends('admin.admin_master')
@section('links')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@endsection
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Admin Change Password</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="{{ route('update.change.password') }}" >
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Current Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="current_password" name="current_password" class="form-control" required > </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>New Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" class="form-control" required > </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Password Confirmation <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required > </div>
                                                </div>
                                            </div> {{--end col md 6--}}

                                        </div> {{--end row--}}
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-success" value="Update">
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>


@endsection
