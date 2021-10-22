<?php
    $templateName = 'article';
    $templateType = 'list';

    $oCoffee = new Coffee();
    if(!empty($_GET['id'])):
        
     
        unset($_GET['action']);

        $oCoffee->delete($dbc, $_GET);
        header('Location:index.php?action=admin/coffee');
    endif;

  
    $oCoffeeList = $oCoffee->getList($dbc);

    include('views/base.php');
?>