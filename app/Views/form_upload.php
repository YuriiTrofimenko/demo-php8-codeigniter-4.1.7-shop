<?php
helper('form');
$this->extend('default');

$this->section('content');
if(isset($error))
{
    echo '<div style="color:red;">'.$error.'</div>';
}
else if(isset($result))
{
    echo '<div style="color:green;">'.$result.'</div>';
}
$st['class']='form-horizontal';
echo str_replace("/index.php", "", form_open_multipart('home/selectImages', $st));
echo '<div class="col-md-offset-3">';
echo form_label('Select image ','image',array('class'=>'control-label'));
echo '&nbsp;';
echo form_upload('image', '', array('class'=>'control-label'));
echo '&nbsp;';
echo form_submit(array('name'=>'send','value'=>'Send', 'class'=>'btn btn-success'));
echo '</div>';
echo form_close();
$this->endSection();