<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class
        ]);

        User::factory([
            'personal_number'   => '61625',
            'title_preffix' => null,
            'last_name' => 'Klika',
            'first_name'    => 'Mirek',
            'title_suffix'  => null,
            'email' => 'klika@khn.cz',
            'password'  => Hash::make('admin')
        ])->create();

        User::factory(10)->create();
    }
}
