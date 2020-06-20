<?php
use App\User;
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
        User::create([
            'name' => 'Juan',
            'email' => 'hola@hola.com',
            'password' => bcrypt('12345678')
        ]);
        //create indeterminate users
        factory(User::class, 10)->create();
    }
}
