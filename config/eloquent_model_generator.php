<?php

return [
    'model_defaults' => [
        'namespace'       => 'App',
        'base_class_name' =>  \Illuminate\Database\Eloquent\Model::class,
        'output_path'     => 'App\Models',
        'no_timestamps'   => true,
        'date_format'     => 'U',
        'connection'      => 'other-connection',
        'backup'          => true,
    ],
];