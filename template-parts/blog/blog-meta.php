<?php
$cat = get_the_category();
?>

<div class="tpblog-2__meta mb-15">
    <span class="catagori "><?php echo $cat[0]->name; ?></span>
    <span class="date"><?php echo get_the_date(); ?></span>
</div>