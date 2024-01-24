<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Deslike;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class DeslikeCommentController extends Controller
{
    public function store($comment)
    {
        $comment = (int)$comment;
        $comment = Comment::find($comment);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($comment) {
            if ($profile_user) {

                $desliked = Deslike::where('comment_id', $comment->id)
                    ->where('profile_user_id', $profile_user)
                    ->first();


                if (!$desliked) {
                    if ($comment) {
                        $data = Deslike::create([
                            'profile_user_id' => $profile_user,
                            'comment_id' => $comment->id,
                        ]);

                        return response([
                            'data' => $data,
                            'message' => 'Deslike criado com sucesso!'
                        ], 200);
                    }

                    return response([
                        'message' => 'Comentário não encontrado!'
                    ], 404);
                }

                return response([
                    'message' => 'Esse comentário já recebeu um deslike de você!'
                ], 404);
            }

            return response([
                'message' => 'Usuário não encontrado!'
            ], 404);
        }
        return response([
            'message' => 'Comentário não encontrado!'
        ], 404);
    }

    public function index($comment)
    {
        $comment = Comment::find($comment);

        if ($comment) {
            $data = Deslike::where('comment_id', $comment->id)->get();

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
            'message' => 'Comentário não encontrado!'
        ], 404);
    }

    public function show($comment, $id)
    {
        $comment = Comment::find($comment);

        if ($comment) {
            $find = Deslike::find($id);

            if ($find) {
                $comment_id = $find->comment_id;

                if ($comment->id == $comment_id) {
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
            'message' => 'Comentário não encontrado!'
        ], 404);
    }

    public function destroy($comment, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $comment = Comment::find($comment);

        $find = Deslike::find($id);

        if ($find) {
            $profile_user_comment = $find->profile_user_id;
            $comment_id = $find->comment_id;

            if ($comment) {
                if ($comment->id == $comment_id) {

                    if ($profile_user === $profile_user_comment) {

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
                'message' => 'Não foi possível achar o comentário.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o deslike.'
        ], 404);
    }
}
