<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data =[
            ['id' =>1,'name'=>'Eka Indra Supriyatna','email' =>'kaindras2005@gmail.com','role_id'=>1,'password'=>'$2y$10$NEP.llrp9hpWtc686/fKn.epT2gJbM//6jMGo5acdwQsVtZWn2JOi'],
            ['id' =>2,'name'=>'Sumini, M.Pd','email' =>'sumini.progo@gmail.com','role_id'=> 2,'password'=>'$2y$10$hin5DpY8gq2o0Jo6xZ7qUudH6e30g9osF3.R1ECyjKN1tGk/aA4ca'],
            ['id' =>3,'name'=>'Maria Rossa','email' =>'maria.rossa@gmail.com','role_id'=> 3,'password'=>'$2y$10$oNJNEV9uTcwjF1GcdwmAkOntkMwIVxkR1hm4RztoLYbU9O7A23WGC'],
            ['id' =>4,'name'=>'Adithya Galih','email' =>'ekasupriyatna521@admin.smp.belajar.id','role_id'=> 4,'password'=>'$2y$10$v7uHmWWkSjSqQoO0qsrUrupw.UIjyGEZhYAlns5MiNCpiDbByt/Sm'],
            ['id' =>5,'name'=>'Maulana Fajri','email' =>'kaindras2015@gmail.com','role_id'=> 5,'password'=>'$2y$10$2HiFjF2nDWHaSnab4O5GY.lzH4B7xPYS69Qn/j5CdxUHfJw9tQg7'],
        ];

        DB::table('users')->insert($data);
    }
}
