<?php
    $helper = new \Bootstrap3\View\Helper\BootstrapHtmlHelper ($this) ;
    echo $helper->alert (h($message), 'warning', $params) ; 
?>