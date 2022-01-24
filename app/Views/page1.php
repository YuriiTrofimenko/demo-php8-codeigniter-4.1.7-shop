<h2><?= $title?></h2>
<p><?= $text?></p>
<?php
echo '<ul>';
foreach($countries as $c)
{
    echo '<li>'.$c.'</li>';
}
echo '</ul>';
?>