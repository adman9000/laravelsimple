<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('tasks')->insert([
            'name' => "Build site",
            'priority' => 1,
            'completed' => 0,
        ]);
         DB::table('tasks')->insert([
            'name' => "Test site",
            'priority' => 1,
            'completed' => 0,
        ]);
         DB::table('tasks')->insert([
            'name' => "Launch site",
            'priority' => 2,
            'completed' => 0,
        ]);
    }
}
