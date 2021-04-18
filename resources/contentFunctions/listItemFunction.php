<?php 
function sortDotComma($data){
    $waarde = explode(";", $data);
    foreach($waarde as $info){
        ?>
        <li class="list-group-item  bg-transparent border-0"><?=ucfirst($info)?></li>
        <?php
    }
}

