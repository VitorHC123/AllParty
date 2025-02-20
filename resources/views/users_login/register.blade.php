<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AllParty - Registrar</title>
    <link rel="stylesheet" href="/assets_admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets_admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets_admin/css/style.css">
    <link rel="shortcut icon" href="/assets_admin/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Registrar</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Nome Completo</label>
                                    <input type="text" name="name" class="form-control p_input"
                                        value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="phone" class="form-control p_input" id="telefone"
                                        oninput="formatarTelefone(this)" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class="form-control p_input"
                                        value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="password" class="form-control p_input" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirmar Senha</label>
                                    <input type="password" name="password_confirmation" class="form-control p_input"
                                        required>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-primary btn-block enter-btn">Registrar</button>
                                </div>
                                <p class="sign-up">Já tem uma conta? <a href="/login">Fazer login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets_admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets_admin/js/off-canvas.js"></script>
    <script src="/assets_admin/js/hoverable-collapse.js"></script>
    <script src="/assets_admin/js/misc.js"></script>
    <script src="/assets_admin/js/settings.js"></script>
    <script src="/assets_admin/js/todolist.js"></script>
    <script>
        function formatarTelefone(input) {
            let valor = input.value.replace(/\D/g, '');
            if (valor.length <= 2) {
                input.value = '(' + valor;
            } else if (valor.length <= 6) {
                input.value = '(' + valor.substring(0, 2) + ') ' + valor.substring(2);
            } else {
                input.value = '(' + valor.substring(0, 2) + ') ' + valor.substring(2, 7) + '-' + valor.substring(7, 11);
            }
        }
    </script>
</body>

</html>
