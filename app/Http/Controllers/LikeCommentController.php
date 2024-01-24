<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\ProfileUser;

class LikeCommentController extends Controller
{
    public function store($comment)
    {
        $comment = Comment::find($comment);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {

            $liked = Like::where('comment_id', $comment->id)
                ->where('profile_user_id', $profile_user)
                ->first();


            if (!$liked) {
                if ($comment) {
                    if ($comment->id == 2) {
                        $data = Like::create([
                            'profile_user_id' => $profile_user,
                            'comment_id' => $comment->id,
                        ]);

                        return response([
                            'data' => $data,
                            'message' => 'Curtida criado com sucesso!'
                        ], 200);
                    }

                    return response([
                        'message' => 'Algo rolou'
                    ], 200);
                }

                return response([
                    'message' => 'Comentário não encontrado!'
                ], 404);
            }

            return response([
                'message' => 'Esse comentário já foi curtido por você!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function index($comment)
    {
        $comment = Comment::find($comment);

        if ($comment) {
            $data = Like::where('comment_id', $comment->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Curtidas não encontrados!'
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
            $find = Like::find($id);

            if ($find) {
                $comment_id = $find->comment_id;

                if ($comment->id == $comment_id) {
                    return response([
                        'data' => $find
                    ], 200);
                }
            }

            return response([
                'message' => 'Não foi possível achar a curtida do usuário.'
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

        $find = Like::find($id);

        if ($find) {
            $profile_user_comment = $find->profile_user_id;
            $comment_id = $find->comment_id;

            if ($comment) {
                if ($comment->id == $comment_id) {

                    if ($profile_user === $profile_user_comment) {

                        $find->delete();

                        return response([
                            'message' => 'Curtida excluída com sucesso!',
                            'data' => $find
                        ], 200);
                    }

                    return response([
                        'message' => 'Você não é dono da curtida.'
                    ], 406);
                }

                return response([
                    'message' => 'Não foi possível achar a curtida.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar o comentário.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar a curtida.'
        ], 404);
    }
}
