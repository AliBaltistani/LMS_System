<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Records = collect([
        [
            'name' => 'admin-ali',
            'email' => 'devali99@gmail.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('devali123'), // password
            'user_type' => "1",
            'remember_token' => \Str::random(10),
        ],
        [
            'name' => 'teacher1',
            'email' => 'teacher1@gmail.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('teacher123'), // password
            'user_type' => "2",
            'remember_token' => \Str::random(10),
        ],
        [
            'name' => 'student',
            'email' => 'student1@gmail.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('student123'), // password
            'user_type' => "3",
            'remember_token' => \Str::random(10),
        ],
        [
            'name' => 'parent1',
            'email' => 'parent1@gmail.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('parent123'), // password
            'user_type' => "4",
            'remember_token' => \Str::random(10),
        ]
       ]);

      $Records->each(function($record){
         User::insert($record);
      }); 
    }
}
