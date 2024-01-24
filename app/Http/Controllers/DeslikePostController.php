<?php

namespace App\Http\Controllers;

use App\Models\Deslike;
use App\Models\Post;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class DeslikePostController extends Controller
{
    public function store($post)
    {
        $post = (int)$post;
        $post = Post::find($post);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {

            $desliked = Deslike::where('post_id', $post->id)
                ->where('profile_user_id', $profile_user)
                ->first();


            if (!$desliked) {
                if ($post) {
                    $data = Deslike::create([
                        'profile_user_id' => $profile_user,
                        'post_id' => $post->id,
                    ]);

                    return response([
                        'data' => $data,
                        'message' => 'Deslike criado com sucesso!'
                    ], 200);
                }

                return response([
                    'message' => 'Post não encontrado!'
                ], 404);
            }

            return response([
                'message' => 'Esse post já recebeu um deslike de você!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function index($post)
    {
        $post = Post::find($post);

        if ($post) {
            $data = Deslike::where('post_id', $post->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Deslikes não encontrados!'
            ], 404);
        }

        return response([
            'message' => 'Post não encontrado!'
        ], 404);
    }

    public function show($post, $id)
    {
        $post = Post::find($post);

        if ($post) {
            $find = Deslike::find($id);

            if ($find) {
                $post_id = $find->post_id;

                if ($post->id == $post_id) {
                    return response([
                        'data' => $find
                    ], 200);
                }
            }

            return response([
                'message' => 'Não foi possível achar o deslike do usuário.'
            ], 404);
        }

        return response([
            'message' => 'Post não encontrado!'
        ], 404);
    }

    public function destroy($post, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $post = Post::find($post);

        $find = Deslike::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;
            $post_id = $find->post_id;

            if ($post) {
                if ($post->id == $post_id) {

                    if ($profile_user === $profile_user_post) {

                        $find->delete();

                        return response([
                            'message' => 'Deslike excluído com sucesso!',
                            'data' => $find
                        ], 200);
                    }

                    return response([
                        'message' => 'Você não é dono do deslike.'
                    ], 406);
                }

                return response([
                    'message' => 'Não foi possível achar o deslike.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar o post.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o deslike.'
        ], 404);
    }
}
