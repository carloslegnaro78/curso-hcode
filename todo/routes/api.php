<?php

use Illuminate\Http\Request;

// http://127.0.0.1:8000/api/tasks

Route::get('tasks', function(){

    $tasks = [
        [
            "id"=>1,
            "name"=>"Estudar PHP 7",
            "complete"=>false
        ],

        [
            "id"=>2,
            "name"=>"Estudar PHP 7",
            "complete"=>true
        ]

    ];

    return $tasks;
});