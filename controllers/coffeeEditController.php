<?php
    $templateName = 'article';
    $templateType = 'edit';

    $oCoffee = new Coffee();

    if(!empty($_POST['submit'])):
        unset($_POST['submit']);
        if(!empty($_POST['id'])):
            $oCoffee->update($dbc, $_POST);
        else:
            $oCoffee->insert($dbc, $_POST);
            header('Location:index.php?action=admin/coffee');
        endif;
    endif;

    if(!empty($_REQUEST['id'])):
        $oCoffee = $oCoffee->getById($dbc, $_REQUEST['id']);
    endif;
 
    include('views/base.php');
?>