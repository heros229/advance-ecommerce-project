@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><br><br>
                    <img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" height="100%" width="100%" alt=""><br><br>
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Accueil</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Modifier Profil</a>
                        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Changer Most de Passe</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Déconnexion</a>
                    </ul>
                </div> {{--end col row 2--}}
                <div class="col-md-2">

                </div> {{--end col row 2--}}
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Changer Mot de Passe </span></h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.password.update')  }}" >
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Ancien Mot de Passe <span>*</span></label>
                                    <input type="password" name="current_password" class="form-control unicase-form-control text-input" id="current_password"  >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Nouveau Mot de Passe <span>*</span></label>
                                    <input type="password" name="password" class="form-control unicase-form-control text-input" id="password"  >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Confirmer Mot de Passe <span>*</span></label>
                                    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password_confirmation" >
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-danger">Modifier</button>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>

                </div> {{--end col row 8--}}
            </div> {{--end row--}}
        </div>
    </div>

@endsection
