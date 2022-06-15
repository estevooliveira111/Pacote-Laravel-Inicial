<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'IP'       => 'http://127.0.0.1/',
            'login'   => date('Y-m-d'),
            'status'   => 1
        ])->givePermissionTo('admin');

    }
}
