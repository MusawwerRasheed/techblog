<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = App\User::create([

            'name' => ' musawer',
            'email'=>'musawerrashid30@gmail.com',
            'password'=>bcrypt('musawer123'),
            'admin' =>1

        ]);


        App\Profile::create([

            'user_id'=>$user->id,
            'avatar'=>'uploads/posts/man.png',
            'about'=>' this is about the user bla bla bla',
            'facebook'=>'www.facebook.com',
            'youtube'=>'www.youtube.com',

        ]);

    }
}
