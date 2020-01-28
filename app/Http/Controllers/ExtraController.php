<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class ExtraController extends Controller
{

public function removeTaskFromEmployee($ide, $idt) {

    $employee = Employee::findOrFail($ide);
    $task = Task::findOrFail($idt);

    $employee -> tasks() -> detach($task);

    return redirect() -> route('employee.index');

}

}