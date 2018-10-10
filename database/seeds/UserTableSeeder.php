<?php
use App\User;
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'username' => 'dea',
        'email' => 'afrizaldea@gmail.com',
        'password' => Hash::make('123'),
    ));
}

}