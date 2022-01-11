<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Candidatos</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/dashboard.css')}}">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootbox.js') }}"></script>

    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    </head>
    <body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Verificar candidatos</h2>
                        </div>
                        <div class="col-sm-7">
                            <a href="{{ url('/newuser') }}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>						
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>						
                            <th>Data Nascimento</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{"$user->first_name $user->last_name"}}</a></td>
                            <td>{{$user->birth_date}}</td>                        
                            <td>{{$user->cpf}}</td>
                            <td>{{$user->rg}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->cellphone}}</td>
                            <td>
                                <a href='{{ url("edituser?id={$user->id}")}}' class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE150;</i></a>
                                <a class="delete" title="Delete" onclick='deleteUser("{{$user->id}}")'><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>     
    </body>

    <script>
        function deleteUser(userID){
            bootbox.confirm({
                title: "Apagar Usuario",
                message: "<b>Confirma apagar este usuario?</b>",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancelar'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirmar'
                    }
                },
                callback: function (result) {
                    if (result){

                    $.ajax({
                        type: "POST",
                        url: '{{ url('/') }}/deleteuser',
                        data: {
                            _token : '{!!csrf_token()!!}',
                            user_id : userID,
                        },
                        dataType: "json",
                        cache: false,
                        success: function (data) {
                            location.reload(true);
                        },
                        error: function (msg) {
                            alert('Ocorreu um erro ao buscar as informações.');
                        }
                    });
                }
                }
            });
        };
    </script>

</html>