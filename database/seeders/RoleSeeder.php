<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $db=[
            ['id' =>1,'name' => 'Admin'],
            ['id' =>2, 'name' =>'Validator'],
            ['id' =>3, 'name' =>'Staf Kesiswaan'],
            ['id' =>4, 'name' =>'Staf Kurikulum'],
            ['id' =>5, 'name' =>'Peserta Didik'],
        ];

        DB::table('roles')->insert($db);

    }
}
