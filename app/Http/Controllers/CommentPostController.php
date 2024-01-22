<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class CommentPostController extends Controller
{
    // Create comment for post
    public function store(Request $request, $post)
    {
        $post = (int)$post;
        $post = Post::find($post);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $validate = $request->validate([
            'text' => 'nullable|string',
        ]);

        if ($profile_user) {
            if ($post) {
                $data = Comment::create([
                    'profile_user_id' => $profile_user,
                    'post_id' => $post->id,
                    'text' => $validate['text'],
                ]);

                return response([
                    'data' => $data,
                    'message' => 'Comentário criado com sucesso!'
                ], 200);
            }

            return response([
                'message' => 'Post não encontrado!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    // Show all comments about one post
    public function index($post)
    {
        $post = Post::find($post);

        if ($post) {
            $data = Comment::where('post_id', $post->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Comentários não encontrados!'
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
            $find = Comment::find($id);

            if (!$find) {
                return response([
                    'message' => 'Não foi possível achar o post do usuário.'
                ], 404);
            }

            return response([
                'data' => $find
            ], 200);
        }

        return response([
            'message' => 'Post não encontrado!'
        ], 404);
    }

    public function update(Request $request, $post, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $post = Post::find($post);

        $find = Comment::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;

            if ($post) {
                if ($profile_user === $profile_user_post) {


                    $validate = $request->validate([
                        'text' => 'nullable|string',
                    ]);

                    $find->update($request->all());

                    return response([
                        'message' => 'Comentário atualizado com sucesso!',
                        'data' => $find
                    ], 200);
                }

                return response([
                    'message' => 'Você não é dono do comentário'
                ], 406);
            }

            return response([
                'message' => 'Não foi possível achar o post.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o comentário.'
        ], 404);
    }

    public function destroy(Request $request, $post, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $post = Post::find($post);

        $find = Comment::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;

            if ($post) {
                if ($profile_user === $profile_user_post) {

                    $find->delete();

                    return response([
                        'message' => 'Comentário deletado com sucesso!',
                        'data' => $find
                    ], 200);
                }

                return response([
                    'message' => 'Você não é dono do comentário'
                ], 406);
            }

            return response([
                'message' => 'Não foi possível achar o post.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o comentário.'
        ], 404);
    }
}
