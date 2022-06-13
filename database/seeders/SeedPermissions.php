<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class SeedPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [
            ["name" => "admin"],
            ["name" => "user"]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
        

    }
}
