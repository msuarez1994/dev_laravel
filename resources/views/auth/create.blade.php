@section('title')
    Crear Usuarios
@endsection
@include('layouts.main')


        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                
            </div>
            <div class="content-body">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-7">
                        <div class="card mb-12">
                            <div class="card-header">
                                <h4 class="card-title">Crear usuario</h4>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <div class="alert-body">{{ $message }}</div>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('create.store') }}" autocomplete="off">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="first-name">Nombre</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="email-id">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="password">Contraseña</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge form-password-toggle">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="password">Repetir contraseña</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge form-password-toggle">
                                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-success me-1 waves-effect waves-float waves-light">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="table-success">
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#" id="editCompany" data-id="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#addNewCard">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                </div>
                                            </div></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addNewCard" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-sm-5 mx-50 pb-5">
                            <h3 class="text-center mb-1" id="addNewCardTitle">Actualizar información de usuario</h3>
                            <form class="row gy-1 gx-2 mt-75">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label" for="modalAddCardNumber">Nombre</label>
                                    <div class="input-group input-group-merge">
                                        <input id="name" class="form-control" type="text" disabled/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddCardNumber">Correo</label>
                                    <div class="input-group input-group-merge">
                                        <input id="email" class="form-control" type="email" disabled/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddCardNumber">Contraseña</label>
                                    <div class="input-group input-group-merge">
                                        <input id="password" class="form-control" type="password"/>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" id="save_user" class="btn btn-primary me-1 mt-1">Guardar</button>
                                    <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                        Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
    <!-- END: Content-->

@include('layouts.footer')

<script>
    $('body').on('click', '#editCompany', function (e) {
        e.preventDefault();
        id = $(this).data('id');
        _token = $("input[name='_token']").val();
        data = {
            id:id,
            _token:_token
        }
        $.ajax({
            type: "POST",
            data: data,
            url: "{{ route('user.update') }}",
            cache: false,
            success: function(datos){
                $("#name").val(datos.name);
                $("#email").val(datos.email);
            }
        });
    });

    $("#save_user").click(function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        email = $("#email").val();
        password = $("#password").val();

        datos = {
            _token:_token,
            id:id,
            email:email,
            password:password
        }
        $.ajax({
            type: "POST",
            data: datos,
            url: "{{ route('user.update.save') }}",
            cache: false,
            success: function(savedata){
                
            }
        });
    });
</script>