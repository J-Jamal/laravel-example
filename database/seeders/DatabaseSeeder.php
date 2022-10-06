<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Task::factory(10)->create();
        // memanggil seeder yang ada di user seeder

        $this->call([
            UserSeeder::class,
            TaskSeeder::class
        ]);
        // foreach ($users as $user) {
        //     User::create($user);
        // }
    }
}
