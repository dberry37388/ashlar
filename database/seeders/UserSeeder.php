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
        $adminUser = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $adminUser->assignRole(['super_admin', 'filament_user']);

        \App\Models\User::factory(10)->create()
            ->each(function (User $user) {
                $user->assignRole('filament_user');
            });
    }
}
