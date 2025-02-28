@extends('admin.layout.index')
@section('index')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Tabela de Cadastros </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tabela</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Todos os Cadastros</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cadastros</h4>
                            <ul class="navbar-nav w-100">
                                <li class="nav-item w-100">
                                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                        <input type="text" class="form-control" placeholder="Pesquisar" id="searchInput"
                                            onkeyup="search()">
                                    </form>
                                </li>
                            </ul>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert"
                                            id="successAlert">
                                            {{ session('success') }}
                                        </div>
                                    @endif


                                    <thead>
                                        <tr>
                                            <th>Imagem</th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>E-mail</th>
                                            <th>Papel</th>
                                            <th>Data de Criação</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @foreach ($collection as $item)
                                            <tr class="search-item"
                                                data-keywords="{{ strtolower($item->name) }} {{ strtolower($item->phone) }} {{ strtolower($item->email) }} {{ strtolower($item->role->nome ?? '') }}">
                                                <td class="py-1">
                                                    <img src="{{ $item->profile_picture ? asset($item->profile_picture) : asset('assets/images/default-avatar.png') }}"
                                                        alt="image" />
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->role->nome ?? 'Papel não atribuído' }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.accountManagement.edit', $item->id) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="mdi mdi-lead-pencil"></i> Editar
                                                    </a>
                                                </td>


                                                <td>
                                                    <form action="{{ route('admin.accountManagement.delete', $item->id) }}"
                                                        method="POST" style="display:inline;"
                                                        id="delete-form-{{ $item->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete({{ $item->id }})">
                                                            <i class="mdi mdi-delete"></i> Excluir
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td> --}}

            </div>
        </div>

    </div>
    </div>
    </div>




    <script>
        window.onload = function() {
            const successAlert = document.getElementById('successAlert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 3000);
            }
        };

        function confirmDelete(userId) {
            const confirmDelete = confirm(
                'Tem certeza de que deseja excluir este usuário? Esta ação não pode ser desfeita.');

            if (confirmDelete) {
                document.getElementById('delete-form-' + userId).submit();
            }
        }

        function search() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#tableBody .search-item');

            rows.forEach(row => {
                const keywords = row.getAttribute('data-keywords');

                if (keywords.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
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
@endsection
