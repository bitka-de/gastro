<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.de'],
            [
                'name'     => 'Master Admin',
                'password' => Hash::make('admin'), // niemals im Klartext speichern
                'role'     => 'master',
            ]
        );
    }
}
