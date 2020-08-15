<?php

use Illuminate\Http\Request;

// http://127.0.0.1:8000/api/tasks

//Visual Studio Code PHP Intelephense Keep Showing Not Necessary Error

//https://stackoverflow.com/questions/59149877/visual-studio-code-php-intelephense-keep-showing-not-necessary-error

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