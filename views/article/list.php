<h1>Les cafés</h1>
<a href="index.php?action=admin/coffee/edit" title="Ajouter">Ajouter</a>

<?php
if(!empty($oCoffeeList)):
?>
<table>
    <tr>
        <th>Désignation</th>
        <th></th>
    </tr>
    <?php
    foreach($oCoffeeList as $oCoffee):
    ?>
    <tr>
        <td><?php echo $oCoffee->getName(); ?></td>
        <td>
            <a href="index.php?action=admin/coffee/edit&id=<?php echo $oCoffee->getId();?>" title="modifier">Modifier</a>
            <a href="index.php?action=admin/coffee&id=<?php echo $oCoffee->getId();?>" title="supprimer">Supprimer</a>
        
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<?php
else:
?>
<p>Aucun produit enregistré</p>
<?php
endif;