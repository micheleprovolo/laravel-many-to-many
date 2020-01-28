<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 50) 
        -> create()
        -> each(function($employee) {

             $tasks = Task::inRandomOrder() -> take(3) ->get();
             $employee -> tasks() -> attach($tasks);
        });
    }
}
