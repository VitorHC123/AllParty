<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style_edits.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="assets_admin/images/logo.png" />
    <title>Editar Usuário</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <h2>Editar Usuário</h2>
            <form method="POST" action="{{ route('admin.accountManagement.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="image-upload-container">
                    <div class="image-preview" id="imagePreview"
                        style="background-image: url('{{ asset($user->profile_picture) }}');"></div>
                    <label for="imageUpload" class="image-upload-label">
                        <i class="fa fa-camera"></i> Escolher imagem
                    </label>
                    <input type="file" id="imageUpload" name="profile_picture" accept="image/*"
                        onchange="previewImage(event)" />
                </div>

                <div class="input-container">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                        placeholder="Digite o nome" required>
                </div>

                <div class="input-container">
                    <label for="phone">Telefone:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                        placeholder="Digite o telefone" onkeyup="formatarTelefone(this)" required>
                </div>

                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}"
                        placeholder="Digite seu email" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                    <a href="{{ route('admin.accountManagement.index') }}" class="btn btn-secondary">Cancelar</a>

                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.style.backgroundImage = `url(${e.target.result})`;
                imagePreview.style.backgroundSize = 'cover';
                imagePreview.style.backgroundPosition = 'center';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

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
