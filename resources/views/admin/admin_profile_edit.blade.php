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
                    <h4 class="box-title">Form Validation</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Admin User Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" required value="{{$editData->name}}"> </div>
                                                </div>
                                            </div> {{--end col md 6--}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Admin Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" required value="{{$editData->email}}"> </div>
                                                </div>
                                            </div> {{--end col md 6--}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>File Input Field <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="profile_photo_path" id="image" class="form-control" required> </div>
                                                </div>
                                            </div> {{--end col md 6--}}
                                            <div class="col-md-6">
                                                <img src="{{ (!empty($adminData->profile_photo_path)) ? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" id="showImage" style="width: 100px; height: 100px;" alt="">
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
@section('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection
