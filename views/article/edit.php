<h1>Les cafés</h1>

<span>Une erreur est survenue</span>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
    <label for="name">Désignation</label>
    <input type="text" name="name" id="name" placeholder="Désignation" <?php if(!empty($oCoffee)): ?> value="<?php echo $oCoffee->getName(); ?>" <?php endif;?>/>
    <label for="origin">Origine</label>
    <input type="text" name="origin" id="origin" placeholder="Origine exemple pérou" <?php if(!empty($oCoffee)): ?> value="<?php echo $oCoffee->getOrigin(); ?>" <?php endif;?>/>
    <label for="description">Description</label>
    <textarea name="description" id="description" placeholder="Description"><?php if(!empty($oCoffee)): echo $oCoffee->getDescription();  endif;?></textarea>
    <label for="price">Prix</label>
    <input type="number" name="price" id="price" placeholder="Prix en euro" <?php if(!empty($oCoffee)): ?> value="<?php echo $oCoffee->getPrice(); ?>" <?php endif;?>/>

    <?php if(!empty($oCoffee) AND !empty($oCoffee->getId())): ?>
        <input type="hidden" name="id" id="id" value="<?php echo $oCoffee->getId(); ?>" />
    <?php endif;?>

    <input type="submit" name="submit" id="submit" value="Enregistrer"/>
</form>