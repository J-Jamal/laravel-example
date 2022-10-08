<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        // collect([
        //     [
        //         'name' => 'Test User 1',
        //         'email' => 'test@example.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Test User 2',
        //         'email' => 'test2@example.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });
    }
}
