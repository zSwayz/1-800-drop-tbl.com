<?php
    /* NOTE: you need to add the following to your sudoers file for any of this to work:
    *
    *    www-data   ALL= (root) NOPASSWD: /sbin/iptables
    *
    */


    // DROP IT - https://youtu.be/X3oOQ8XnQWU?t=1m14s
    shell_exec('/sbin/iptables -I INPUT -s ' . $_SERVER['REMOTE_ADDR'] . ' -j DROP');
    sleep(15);
    shell_exec('/sbin/iptables -D INPUT -s ' . $_SERVER['REMOTE_ADDR'] . ' -j DROP');
?>