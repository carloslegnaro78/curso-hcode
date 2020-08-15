<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TasksContorller extends Controller
{
        
    public function index()
    {        
            
        return Task::all();
        
    }
    
    public function store()
    {

        return "Ok";

    }
    
}
