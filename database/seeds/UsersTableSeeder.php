<?php
namespace App;
use App\User;
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
        //

       // DB::table('users')->delete();
        User::create(array(
            'username' => 'mike',
            'email' => 'mike@gmail.com',
            'password' => Hash::make('123456')
        ));
        User::create(array(
            'username' => 'john',
            'email' => 'john@gmail.com',
            'password' => Hash::make('123456')
        ));
    }
}
