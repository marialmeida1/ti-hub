<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store($following)
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {
            $following = ProfileUser::find($following);

            if ($following) {

                if ($following->id == $profile_user) {
                    return response([
                        'message' => 'Você não pode seguir a si mesmo!'
                    ], 404);
                }

                $data = Follower::create([
                    'follower_id' => $profile_user,
                    'following_id' => $following->id
                ]);

                return response([
                    'data' => $data,
                    'message' => 'Você começou a seguir o usuário'
                ], 200);
            }

            return response([
                'message' => 'Usuário não encontrado!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    // Quantos seguidores o usuário logado tem
    public function index_follower()
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {
            $data = Follower::where('following_id', $profile_user)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Seguidores não encontrados!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    // Quantos seguidores o usuário logado segue
    public function index_following()
    {

        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        if ($profile_user) {
            $data = Follower::where('follower_id', $profile_user)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Seguidores não encontrados!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }


    // Ver quantos seguidores X usuário tem
    public function show_follower($id)
    {

        $profile_user = ProfileUser::find($id);

        if ($profile_user) {
            $data = Follower::where('follower_id', $profile_user->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Seguidores não encontrados!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    // Ver quantos seguidores X usuário segue
    public function show_following($id)
    {

        $profile_user = ProfileUser::find($id);

        if ($profile_user) {
            $data = Follower::where('following_id', $profile_user->id)->get();

            if ($data) {
                return response([
                    'data' => $data,
                ], 200);
            }

            return response([
                'message' => 'Seguidores não encontrados!'
            ], 404);
        }

        return response([
            'message' => 'Usuário não encontrado!'
        ], 404);
    }

    public function destroy($id)
    {
        $user = auth()->user()->id;
        $profile_user = ProfileUser::where('user_id', $user)->first()->id;

        $find = Follower::find($id);

        if ($find) {
            $profile_user_follower = $find->follower_id;


            if ($profile_user === $profile_user_follower) {

                $find->delete();

                return response([
                    'message' => 'Você parou de seguir o usuário!',
                    'data' => $find
                ], 200);
            }

            return response([
                'message' => 'Você não segue o usuário.'
            ], 406);
        }

        return response([
            'message' => 'Não foi possível achar esse usuário   .'
        ], 404);
    }
}
