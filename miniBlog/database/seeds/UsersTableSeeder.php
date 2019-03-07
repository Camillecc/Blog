<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*DB::table('users')->insert([
          'name' => 'Aaa',
          'email' => 'aaa'.'@aaa.com',
          'password' => bcrypt('secret'),
      ]);*/
      factory(App\User::class, 10)->create()->each(function ($user){
        $user->posts()->save(factory(App\Post::class)->make());
      }) ;
    }
}
