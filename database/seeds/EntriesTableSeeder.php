<?php
use App\Entry;
use App\User;
use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users->each(function($user){
             //Create undetermined entries
            factory(Entry::class, 10)->create([
                //implement user id to create entry
                'user_id' => $user->id
            ]);
        });
       
    }
}
