<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $type_page ?? 'Novo'}}  Usuario</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="{{ url('css/dashboard.css')}}">

    </head>
    <body>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    @if($type_page == "Criar")
                    <form action="{{ route('newuser') }}" method="post">

                    @elseif($type_page == "Editar")
                    <form action="{{ route('edituser') }}" method="post">
                        <input name="id" type="hidden" id="id"  class="form-control" value="{{ $user->id }}" />
                    @endif

                        @csrf

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input name="email" type="email" id="email"  class="form-control" value="{{ $user->email ?? 'email@email.com' }}" />
                                    <label class="form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input name="birth_date" type="text" id="birth_date" class="form-control" value="{{ $user->birth_date ?? '01/01/2000' }}" />
                                    <label class="form-label" for="birth_date">Data Nascimento</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password" type="text" id="password" value="{{ $user->password ?? '' }}" class="form-control" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input name="first_name" type="text" id="first_name" value="{{ $user->first_name ?? '' }}" class="form-control" />
                                <label class="form-label" for="first_name">First name</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input name="last_name" type="text" id="last_name" value="{{ $user->last_name ?? '' }}" class="form-control" />
                                <label class="form-label" for="last_name">Last name</label>
                            </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input name="cpf" type="text" id="cpf" value="{{ $user->cpf ?? '' }}" class="form-control" />
                                <label class="form-label" for="cpf">CPF</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input name="rg" type="text" id="rg" value="{{ $user->rg ?? '' }}" class="form-control" />
                                <label class="form-label" for="rg">RG</label>
                            </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input name="phone" type="text" id="phone" value="{{ $user->phone ?? '' }}" class="form-control" />
                                <label class="form-label" for="phone">Phone</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input name="cellphone" type="text" id="cellphone" value="{{ $user->cellphone ?? '' }}" class="form-control" />
                                <label class="form-label" for="cellphone">Cellphone</label>
                            </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input name="cep" type="text" id="cep" value="{{ $user_address->zipcode ?? '' }}" class="form-control" />
                            <label class="form-label" for="cep">CEP</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input name="address" type="text" id="address" value="{{ $user_address->address ?? '' }}" class="form-control" />
                                <label class="form-label" for="address">Address</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input name="number" type="text" id="number" value="{{ $user_address->number ?? '' }}" class="form-control" />
                                <label class="form-label" for="number">Number</label>
                            </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="complement" type="text" id="complement" value="{{ $user_address->complement ?? '' }}" class="form-control" />
                            <label class="form-label" for="complement">Complement</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="city" type="text" id="city" value="{{ $user_address->city ?? '' }}" class="form-control" />
                            <label class="form-label" for="city">City</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input name="district" type="text" id="district" value="{{ $user_address->district ?? '' }}" class="form-control" />
                                <label class="form-label" for="district">District</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input name="state" type="text" id="state" value="{{ $user_address->state ?? '' }}" class="form-control" />
                                <label class="form-label" for="state">State</label>
                            </div>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">{{ $type_page ?? 'Novo'}}  Usuario</button>
                    </form>
                </div>
            </div>
        </div>    
    </body>

    <script>
        $(document).ready(function(){
            $("#cep").blur(function(){
                var cep = $(this).val().replace(/[^0-9]/, '');
                if(cep){
                    var url = 'https://viacep.com.br/ws/'+cep+'/json/';
                    $.ajax({
                            url: url,
                            dataType: 'jsonp',
                            crossDomain: true,
                            contentType: "application/json",
                            success : function(json){
                                console.log(json);
                                if(json.logradouro){
                                    $("#state").val(json.uf);
                                    $("#city").val(json.localidade);
                                    $("#district").val(json.bairro);
                                    $("#address").val(json.logradouro);
                                    $("#complement").val(json.complemento);
                                }
                            }
                    });
                }                   
            }); 
        });

        $('#birth_date').mask('00/00/0000')
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00000-000');
    </script>
</html>