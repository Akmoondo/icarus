<?php

namespace Repositories;

use App\User;

class UserRepository{

    public function index( $search = null )
    {
       if( $search ) {
            $users = User::where('sector_id', $search['sector_id'])->get();
       } else{
            $users = User::all();
       }
       
       return $users;
    }

    public function show( $user_id )
    {
        $user = User::find( $user_id );

        return $user;
    }

    public function update($user_id, $inputs)
    {
        $user = User::where('id', $user_id)->update([
            'name' => $inputs['name'],
            'password' => bcrypt( $inputs['password'] )
        ]);

        return $user;
    }

    public function destroy( $user_id)
    {
        $user = User::where('id', $user_id)->delete();
        return $user;
    }

}