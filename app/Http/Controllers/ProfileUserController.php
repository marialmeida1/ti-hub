<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileUserController extends Controller
{
    // Create Profile User
    public function store(Request $request)
    {

        $user = auth()->user()->id;

        $validate = $request->validate([
            'name' => 'required|string|max:80',
            'location' => 'nullable|string|max:200',
            'job' => 'nullable|string|max:120',
            'image' => 'nullable|string'
        ]);


        if ($user) {
            $data = ProfileUser::create([
                'user_id' => $user,
                'name' => $validate['name'],
                'location' => $validate['location'],
                'job' => $validate['job'],
                'image' => $validate['image']
            ]);

            return response([
                'data' => $data,
                'message' => 'Perfil do usuário criado com sucesso!'
            ], 200);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function index()
    {

        $data = ProfileUser::all();

        if ($data) {
            return response([
                'data' => $data,
            ], 200);
        }

        return response([
            'message' => 'Usuários não encontrados!'
        ], 404);
    }

    // Show only Profile User
    public function show($id)
    {

        $find = ProfileUser::find($id);

        if (!$find) {
            return response([
                'message' => 'Não foi possível achar o perfil do usuário.'
            ], 404);
        }

        return response([
            'data' => $find
        ], 200);
    }


    // Update Profile User
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required|string|max:80',
            'location' => 'nullable|string|max:200',
            'job' => 'nullable|string|max:120',
            'image' => 'nullable|string'
        ]);

        $find = ProfileUser::find($id);

        if ($find) {
            $find->update($request->all());
        } else {
            return response([
                'message' => 'Não foi possível achar o perfil do usuário.'
            ], 404);
        }

        return response([
            'message' => 'Perfil do usuário atualizado com sucesso!',
            'data' => $find
        ], 200);
    }

    public function destroy($id)
    {
        $find = ProfileUser::find($id);
        $user = auth()->user();

        if ($find) {
            $find->delete();
        } else {
            return response([
                'message' => 'Não foi possível achar o perfil do usuário.'
            ], 404);
        }

        return response([
            'message' => 'Perfil do usuário deletado com sucesso!',
        ], 200);
    }
}
