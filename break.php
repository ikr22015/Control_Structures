<?php
/**
 * Created by PhpStorm.
 * User: Yameen FTFL
 * Date: 11/19/2015
 * Time: 10:41 AM
 */
$i = 0;
while (++$i<=15) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1;  /* Exit only the switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            break 2;  /* Exit the switch and the while. */
        default:
            break;
    }
}
?>