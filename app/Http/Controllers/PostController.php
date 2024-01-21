<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Create new post
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $validate = $request->validate([
            'text' => 'nullable|required_without:image|string',
            'image' => 'nullable|required_without:text|string',
        ]);

        if ($profile_user) {
            $data = Post::create([
                'profile_user_id' => $profile_user,
                'text' => $validate['text'],
                'image' => $validate['image']
            ]);

            return response([
                'data' => $data,
                'message' => 'Post criado com sucesso!'
            ], 200);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function index()
    {

        $data = Post::all();

        if ($data) {
            return response([
                'data' => $data,
            ], 200);
        }

        return response([
            'message' => 'Posts não encontrados!'
        ], 404);
    }

    public function index_user()
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $data = Post::where('profile_user_id', $profile_user)->get();

        if ($data) {
            return response([
                'data' => $data,
            ], 200);
        }

        return response([
            'message' => 'Você não possui posts!'
        ], 404);
    }

    public function show($id)
    {

        $find = Post::find($id);

        if (!$find) {
            return response([
                'message' => 'Não foi possível achar o post do usuário.'
            ], 404);
        }

        return response([
            'data' => $find
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $find = Post::find($id);
        $profile_user_post = $find->profile_user_id;

        if ($profile_user === $profile_user_post) {

            $validate = $request->validate([
                'text' => 'nullable|required_without:image|string',
                'image' => 'nullable|required_without:text|string',
            ]);

            if ($find) {
                $find->update($request->all());
            } else {
                return response([
                    'message' => 'Não foi possível achar o post.'
                ], 404);
            }

            return response([
                'message' => 'Post atualizado com sucesso!',
                'data' => $find
            ], 200);
        }

        return response([
            'message' => 'Você não é dono do post'
        ], 406);
    }

    public function destroy($id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $find = Post::find($id);
        $profile_user_post = $find->profile_user_id;

        if ($profile_user === $profile_user_post) {
            if ($find) {
                $find->delete();
            } else {
                return response([
                    'message' => 'Não foi possível achar o post do usuário.'
                ], 404);
            }

            return response([
                'message' => 'Post deletado com sucesso!',
            ], 200);
        }

        return response([
            'message' => 'Você não é dono do post'
        ], 406);
    }
}
