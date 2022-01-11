<?php

namespace App\Http\Controllers\Resource;

use App\Models\UsersAddress;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class userController extends Controller
{
    public function newUser(Request $request){
        return view('user')->with('type_page', 'Criar');
    }

    public function editUser(Request $request) {
        $validated = $request->validate([
            'id' => 'required|numeric',
        ], [
            'id.required' => 'Informe um id',
            'id.numeric' => "ID permitido apenas numero"
        ]);

        $user = User::where('id', $validated['id'])->first();
        $userAddress = UsersAddress::where('user_id', $validated['id'])->first();

        return view('user')->with('type_page', 'Editar')->with('user', $user)->with('user_address', $userAddress);
    }

    public function saveNewUser(Request $request) {

        $validated = $request->validate([
            'email' => 'required|max:100',
            'password' => 'required|min:8|max:100',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'cpf' => 'required|max:14',
            'rg' => 'required|max:20',
            'birth_date' => 'required|max:11',
            'phone' => 'sometimes|max:20',
            'cellphone' => 'required|max:20',
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'city' => 'required',
            'district' => 'required',
            'state' => 'required',
        ], [
            'suggestion.required' => 'O Email não pode ser vazio',
            'password.required' => 'A senha não pode ser vazia',
            'first_name.required' => 'O nome não pode ser vazio',
            'last_name.required' => 'o Sobrenome não pode ser vazio',
            'cpf.required' => 'O CPF não pode ser vazio',
            'rg.required' => 'O RG não pode ser vazio',
            'birth_date.required' => 'A data de nascimento não pode ser vazia',
            'cellphone.required' => 'O celular não pode ser vazio',
        ]);

        $newUser = [
            "email" =>  $validated['email'],
            "password" =>  $validated['password'],
            "first_name" =>  $validated['first_name'],
            "last_name" =>  $validated['last_name'],
            "cpf" =>  $validated['cpf'],
            "rg" =>  $validated['rg'],
            "birth_date" =>  $validated['birth_date'],
            "phone" =>  $validated['phone'] ?? '0000000',
            "cellphone" =>  $validated['cellphone'],
        ];

        $userID = User::insertGetId($newUser);

        $userAddress = [
            "user_id" => $userID,
            "zipcode" =>  $validated['cep'],
            "address" =>  $validated['address'],
            "number" =>  $validated['number'],
            "complement" =>  $validated['complement'],
            "city" =>  $validated['city'],
            "district" =>  $validated['district'],
            "state" =>  $validated['state'],
        ];

        UsersAddress::insert($userAddress);

        return redirect()
            ->route('dashboard')
            ->with('message', 'Usuario cadastrado com sucesso');
    }

    public function saveEditUser(Request $request) {
        $validated = $request->validate([
            'id' => 'required',
            'email' => 'required|max:100',
            'password' => 'required|min:8|max:100',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'cpf' => 'required|max:14',
            'rg' => 'required|max:20',
            'birth_date' => 'required|max:11',
            'phone' => 'sometimes|max:20',
            'cellphone' => 'required|max:20',
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'city' => 'required',
            'district' => 'required',
            'state' => 'required',
        ], [
            'suggestion.required' => 'O Email não pode ser vazio',
            'password.required' => 'A senha não pode ser vazia',
            'first_name.required' => 'O nome não pode ser vazio',
            'last_name.required' => 'o Sobrenome não pode ser vazio',
            'cpf.required' => 'O CPF não pode ser vazio',
            'rg.required' => 'O RG não pode ser vazio',
            'birth_date.required' => 'A data de nascimento não pode ser vazia',
            'cellphone.required' => 'O celular não pode ser vazio',
        ]);

        $userEdit = [
            "email" =>  $validated['email'],
            "password" =>  $validated['password'],
            "first_name" =>  $validated['first_name'],
            "last_name" =>  $validated['last_name'],
            "cpf" =>  $validated['cpf'],
            "rg" =>  $validated['rg'],
            "birth_date" =>  $validated['birth_date'],
            "phone" =>  $validated['phone'] ?? '0000000',
            "cellphone" =>  $validated['cellphone'],
        ];

        $userAddress = [
            "zipcode" =>  $validated['cep'],
            "address" =>  $validated['address'],
            "number" =>  $validated['number'],
            "complement" =>  $validated['complement'],
            "city" =>  $validated['city'],
            "district" =>  $validated['district'],
            "state" =>  $validated['state'],
        ];

        User::where('id', $validated['id'])->update($userEdit);
        UsersAddress::where('user_id', $validated['id'])->update($userAddress);

        return redirect()
            ->route('dashboard')
            ->with('message', 'Usuario alterado com sucesso');
    }
    public function ajaxDeleteUser (Request $request) {
        try {
            User::where('id', $request->user_id)->delete();
            UsersAddress::where('user_id', $request->user_id)->delete();
            
            return response()->json(true);

        } catch (\Exception $e) {
            return response()->json(false);
        }
    }
}