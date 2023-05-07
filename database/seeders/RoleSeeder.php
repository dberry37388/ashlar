<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create our roles
        foreach (Role::cases() as $case) {
            \Spatie\Permission\Models\Role::create([
                'name' => $case->value,
                'guard_name' => 'web'
            ]);
        }
    }
}
