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
                        <h3 class="text-center"><span class="text-danger">Hi...</span><strong>{{ Auth::user()->name  }}</strong>
                            Modifier votre Profil
                        </h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.profile.store')  }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Nom <span>*</span></label>
                                    <input type="name" name="name" class="form-control unicase-form-control text-input" id="name" value="{{ $user->name  }}" >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" value="{{ $user->email  }}" >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Téléphone <span>*</span></label>
                                    <input type="text" name="phone" class="form-control unicase-form-control text-input" id="phone" value="{{ $user->phone  }}" >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Image <span>*</span></label>
                                    <input type="file" name="profile_photo_path" class="form-control unicase-form-control text-input" id="profile_photo_path"  >
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
