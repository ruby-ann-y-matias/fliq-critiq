<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class Role_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
        	$admin_user = User::find($i);
            $admin_role = Role::find(1);
        	$admin_user->roles()->attach($admin_role);
        }

        for ($i = 4; $i <= 20; $i++) {
        	$reg_user = User::find($i);
            $reg_role = Role::find(2);
        	$reg_user->roles()->attach($reg_role);
        }
    }
}
