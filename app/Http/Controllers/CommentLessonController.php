<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class CommentLessonController extends Controller
{
    // Create comment for lesson
    public function store(Request $request, $lesson)
    {
        $lesson = (int)$lesson;
        $lesson = Lesson::find($lesson);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $validate = $request->validate([
            'text' => 'nullable|string',
        ]);

        if ($profile_user) {
            if ($lesson) {
                $data = Comment::create([
                    'profile_user_id' => $profile_user,
                    'lesson_id' => $lesson->id,
                    'text' => $validate['text'],
                ]);

                return response([
                    'data' => $data,
                    'message' => 'Comentário criado com sucesso!'
                ], 200);
            }

            return response([
                'message' => 'Aula não encontrado!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function index($lesson)
    {
        $lesson = Lesson::find($lesson);

        if ($lesson) {
            $data = Comment::where('lesson_id', $lesson->id)->get();

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
            'message' => 'Aula não encontrado!'
        ], 404);
    }

    public function show($lesson, $id)
    {
        $lesson = Lesson::find($lesson);

        if ($lesson) {
            $find = Comment::find($id);

            if ($find) {
                $lesson_id = $find->lesson_id;

                if ($lesson->id == $lesson_id) {
                    return response([
                        'data' => $find
                    ], 200);
                }
            }

            return response([
                'message' => 'Não foi possível achar o comentário do usuário.'
            ], 404);
        }

        return response([
            'message' => 'Aula não encontrado!'
        ], 404);
    }

    public function update(Request $request, $lesson, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $lesson = Lesson::find($lesson);

        $find = Comment::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;
            $lesson_id = $find->lesson_id;

            if ($lesson) {
                if ($lesson->id == $lesson_id) {

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
                    'message' => 'Não foi possível achar o comentário.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar a aula.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o comentário.'
        ], 404);
    }

    public function destroy(Request $request, $lesson, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $lesson = Lesson::find($lesson);

        $find = Comment::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;
            $lesson_id = $find->lesson_id;

            if ($lesson) {
                if ($lesson->id == $lesson_id) {

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
                    'message' => 'Não foi possível achar o comentário.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar a aula.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar o comentário.'
        ], 404);
    }
}
