<?php

namespace App\Http\Controllers;

use App\Models\Complete;
use App\Models\Lesson;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class CompleteController extends Controller
{
    public function store($lesson)
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {
            $lesson = Lesson::find($lesson);

            if ($lesson) {
                $data = Complete::create([
                    'lesson_id' => $lesson->id,
                    'profile_user_id' => $profile_user
                ]);

                return response([
                    'data' => $data,
                    'message' => 'Aula finalizada com sucesso!'
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
    public function index()
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {
            $data = Complete::where('profile_user_id', $profile_user)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Aulas completas não encontradas!'
            ], 404);
        }

        return response([
            'message' => 'Aula não encontrado!'
        ], 404);
    }

    public function show($id)
    {

        $find = Complete::find($id);

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($find) {
            $profile_user_complete = $find->profile_user_id;

            if ($profile_user == $profile_user_complete) {
                return response([
                    'data' => $find
                ], 200);
            }

            return response([
                'message' => 'Você não foi responsável por completar a aula.'
            ], 404);
        }

        return response([
            'message' => 'Não foi possível achar a indicação.'
        ], 404);
    }

    public function destroy($id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $find = Complete::find($id);

        if ($find) {
            $profile_user_post = $find->profile_user_id;


            if ($profile_user === $profile_user_post) {

                $find->delete();

                return response([
                    'message' => 'Indicação deletada com sucesso!',
                    'data' => $find
                ], 200);
            }

            return response([
                'message' => 'Você não foi responsável por completar a aula.'
            ], 406);
        }

        return response([
            'message' => 'Não foi possível achar a aula finalizada.'
        ], 404);
    }
}
