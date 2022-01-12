<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/globals.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>
<body class="auth-page">
    <div class="content">
        <div class="col-md-12 form-login">
            <div class="card col-md-4">
                <div class="card-header">
                    <div class="auth-logo user">
                        <img src="{{asset('assets/img/user.png')}}" id="profile-pic-preview" alt="logo" class="logo-login">
                    </div>
                    <div class="form-group upload-photo">
                        <button type="submit" class="btn btn-primary" id="photo-changer">
                            <i class="fas fa-cloud-upload-alt"></i> Carregar Foto
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('auth.register.post')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="file" id="profile-photo" name="photo" style="display: none;">
                        <div class="form-group">
                            <input placeholder="Nome:" type="name" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input placeholder="E-mail:" type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input placeholder="Senha:" type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="form-control">
                                <option disabled selected style="color: rgb(66, 66, 66)">Gênero:</option>
                                @foreach ($genders as $gender)
                                    <option value="{{$gender->id}}">{{$gender->value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                        <div class="form-group details">
                            <a href="{{route('auth.login')}}">Já tenho uma conta</a>
                            <a href="#">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6857092d95.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/profile-pic.js')}}"></script>
</html>
