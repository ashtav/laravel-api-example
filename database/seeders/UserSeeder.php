<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "John Doe",
                "email" => "johndoe@gmail.com",
                "birthdate" => "1990-01-01",
                "gender" => "Male",
                "address" => "123 Main Street, Springfield",
                "phone" => "1234567890"
            ],
            [
                "name" => "Jane Smith",
                "email" => "janesmith@gmail.com",
                "birthdate" => "1992-05-10",
                "gender" => "Female",
                "address" => "456 Elm Street, Metropolis",
                "phone" => "0987654321"
            ]
        ];

        foreach ($users as $data) {
            $userId = Str::uuid();

            // Create user
            User::create([
                'id' => $userId,
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make('secret'),
            ]);

            // Create user details
            UserDetail::create([
                'id' => Str::uuid(),
                'user_id' => $userId,
                'birthdate' => $data['birthdate'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'phone' => $data['phone']
            ]);
        }
    }
}
