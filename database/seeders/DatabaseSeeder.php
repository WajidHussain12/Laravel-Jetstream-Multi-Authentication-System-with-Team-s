<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $admin_Role = Role::create(['name' => 'admin']);
        $user_Role = Role::create(['name' => 'user']);

        $wajid = User::create([
            "name" => "Wajid_Hussain",
            "email" => "wajid@admin.com",
            "password" => bcrypt("password")
        ]);

        $wajid->assignRole($admin_Role);


        $asad = User::create([
            "name" => "asad",
            "email" => "asad@user.com",
            "password" => bcrypt("password")
        ]);

        $asad->assignRole($user_Role);

        $superadmin_Role = Role::create(['name' => 'superadmin']);

        $superadmin = User::create([
            'name' => "Syed Wajid Hussain",
            'email' => 'hussainwajid615@gmail.com',
            'password' => bcrypt('admin123')

        ]);

        $superadmin->assignRole($superadmin_Role);


        // $permission = Permission::create(['name' => 'edit articles']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
