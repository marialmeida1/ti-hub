<?php

namespace App\Http\Controllers;

use App\Models\Indication;
use App\Models\Lesson;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    // Create a new indication
    public function store(Request $request, $lesson)
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $validate = $request->validate([
            'text' => 'nullable|required_without:link|string',
            'link' => 'nullable|required_without:text|string|max:180',
        ]);

        if ($profile_user) {
            $lesson = Lesson::find($lesson);

            if ($lesson) {
                $data = Indication::create([
                    'lesson_id' => $lesson->id,
                    'profile_user_id' => $profile_user,
                    'text' => $validate['text'],
                    'link' => $validate['link']
                ]);

                return response([
                    'data' => $data,
                    'message' => 'Indicação criado com sucesso!'
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
            $data = Indication::where('lesson_id', $lesson->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Indicações não encontradas!'
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
            $find = Indication::find($id);

            if ($find) {
                $lesson_id = $find->lesson_id;

                if ($lesson->id == $lesson_id) {
                    return response([
                        'data' => $find
                    ], 200);
                }
            }

            return response([
                'message' => 'Não foi possível achar a indicação.'
            ], 404);
        }

        return response([
            'message' => 'Aula não encontrada!'
        ], 404);
    }

    public function update(Request $request, $lesson, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $lesson = Lesson::find($lesson);

        $find = Indication::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;
            $lesson_id = $find->lesson_id;

            if ($lesson) {
                if ($lesson->id == $lesson_id) {

                    if ($profile_user === $profile_user_post) {


                        $validate = $request->validate([
                            'text' => 'nullable|required_without:link|string',
                            'link' => 'nullable|required_without:text|string|max:180',
                        ]);

                        $find->update($request->all());

                        return response([
                            'message' => 'Indicação atualizado com sucesso!',
                            'data' => $find
                        ], 200);
                    }

                    return response([
                        'message' => 'Você não é dono da indicação'
                    ], 406);
                }
                return response([
                    'message' => 'Não foi possível achar a indicação.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar a aula.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar a indicação.'
        ], 404);
    }

    public function destroy($lesson, $id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $lesson = Lesson::find($lesson);

        $find = Indication::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;
            $lesson_id = $find->lesson_id;

            if ($lesson) {
                if ($lesson->id == $lesson_id) {

                    if ($profile_user === $profile_user_post) {

                        $find->delete();

                        return response([
                            'message' => 'Indicação deletada com sucesso!',
                            'data' => $find
                        ], 200);
                    }

                    return response([
                        'message' => 'Você não é dono da indicação'
                    ], 406);
                }

                return response([
                    'message' => 'Não foi possível achar a indicação.'
                ], 404);
            }

            return response([
                'message' => 'Não foi possível achar a aula.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar a indicação.'
        ], 404);
    }
}
