<div>

    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h1 class="header-title">Todos los roles</h1>
                    </div>
                    <div class="col-auto">
                        @if(\Auth::user()->can('crear roles'))
                        <a href="{{ route('roles.nuevo') }}" class="btn btn-primary lift"><i class="fe fe-plus"></i>
                            Nuevo rol</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <!-- Goals -->
                <div class="card">
                    <div class="table-responsive mb-0">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Usuarios asignados</th>
                                    <th class="text-right">Acción</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($roles as $rol)
                                    <tr>
                                        <td>{{ $rol->id }}</td>
                                        <td>{{ $rol->name }}</td>
                                        <td>{{ $rol->users->count() }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    @if(\Auth::user()->can('editar roles'))
                                                        <a href="{{ route('roles.editar', $rol->id) }}"
                                                            class="dropdown-item">
                                                            <i class="fe fe-edit-3"></i> Editar
                                                        </a>
                                                    @endif
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    @if(\Auth::user()->can('eliminar roles'))
                                                        @if($rol->id != 1)
                                                            <button wire:click="confirmDelete('{{ base64_encode($rol->id) }}')"
                                                                class="dropdown-item">
                                                                <i class="fe fe-trash"></i> Eliminar
                                                            </button>
                                                        @endif
                                                    @endif
                                                
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                {{-- {{ $roles->links() }} --}}
            </div>
        </div>

    </div>
</div>
