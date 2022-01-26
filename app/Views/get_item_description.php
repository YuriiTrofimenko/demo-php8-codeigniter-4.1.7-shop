<?php
helper('form');

// echo form_open('/home/getItemDescription');
echo "<form action='/home/getItemDescription' method='POST'>";
echo "<div class='col-md-offset-4'>";
    $inp = [
        'name'=>'itemid',
        'class'=>'col-md-2',
        'style'=>'color:green;margin:5px;',
        'placeholder'=>'select id',
        'type'=>'text'
    ];
    echo form_input($inp);
    echo form_submit([
        'name'=>'send',
        'value'=>'OK',
        'class'=>'btn btn-sm btn-success col-sm-2'
    ]);
    echo "</div>";
echo form_close();