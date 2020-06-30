<?php
function update_dispo($quantité) {
    if($quantité>0) {
        return false;
    } else {
        return true;
    }
}
?>