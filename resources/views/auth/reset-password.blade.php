@extends('frontend.main_master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Réinitialiser Mot de Passe </li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Réinitialiser Mot de Passe</h4>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Mot de Passe  <span>*</span></label>
                                <input type="password" name="password" class="form-control unicase-form-control text-input" id="password" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirmation mot de Passe <span>*</span></label>
                                <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password_confirmation" >
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button"> Valider </button>
                        </form>
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->

                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

        @include('frontend.body.brands')

        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
