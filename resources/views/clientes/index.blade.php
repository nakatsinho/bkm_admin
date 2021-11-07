@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <strong class="card-title">LISTA DE CLIENTES</strong>
                        </div>
                        <div class="col-sm-8">
                            <div class=" float-right">
                                <a href="{{ route('clients.create') }}" class="btn btn-secondary"><i
                                        class="fa fa-plus"></i> Adicionar Novo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NID</th>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Residencia</th>
                                <th>Contacto</th>
                                <th>Contacto 2</th>
                                <th>E-mail</th>
                                <th class="text-center">Accoes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $value)
                            <form action="{{ route('clients.destroy',$value->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->surname}}</td>
                                    <td>{{$value->local}}</td>
                                    <td>{{$value->contact1}}</td>
                                    <td>{{$value->contact2}}</td>
                                    <td>{{$value->email}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i> Ver</a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                            Apagar</button>
                                </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/init/datatables-init.js')}}"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
});
</script>
@endsection