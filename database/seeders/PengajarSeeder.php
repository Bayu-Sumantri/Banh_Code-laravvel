<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        $admin_sup_permission = [
            'create_user',
            'list_user',
            'create_kelas',
            'create_pengajar',

            //staff side
            "create_tugas",
            "tugas_show_staff",
            "user_active",

            //user side 
            "transaksi_pembelian",
            "tugas_show_user",
        ];

        $staff_sup_permission = [
            "create_tugas",
            "tugas_show_staff",
            "user_active",

        ];
        
        $user_sup_permission = [
            "transaksi_pembelian",
            "tugas_show_user",

        ];

        $allPermission = array_unique(array_merge($admin_sup_permission, $staff_sup_permission, $user_sup_permission));

        foreach ($allPermission as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
        
        $role = Role::create(['name' => 'admin']);
        foreach ($admin_sup_permission as $permission) {
            $role->givePermissionTo($permission);
        }

        $role = Role::create(['name' => 'staff']);
        foreach ($staff_sup_permission as $permission) {
            $role->givePermissionTo($permission);
        }

        $role = Role::create(['name' => 'user']);
        foreach ($user_sup_permission as $permission) {
            $role->givePermissionTo($permission);
        }
        
    }
    }