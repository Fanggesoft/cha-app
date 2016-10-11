<?php
use \App\Http\Controllers\Auth;
use App\User as User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'mike',
            'email' => 'mike@gmail.com',
            'password' => Hash::make('123456')
        ));
        User::create(array(
            'name' => 'john',
            'email' => 'john@gmail.com',
            'password' => Hash::make('123456')
        ));
    }
}
