<?php $this->layout('layouts::website')?>

<h3>inschrijven</h3>

<form action="<?php echo url("register.handle")?>" method="POST">

    <div class="form-group">
        <label for="voornaam">voornaam</label>
        <input type="text" name="voornaam" value="<?php echo input('voornaam')?>" class="form-control" id="voornaam">
        <?php if (isset($error['voornaam'])):?>
            <?php echo $error['voornaam']?>
        <?php endif;?>

    <div class="form-group">
        <label for="achternaam">achternaam</label>
        <input type="text" name="achternaam" value="<?php echo input('achternaam')?>" class="form-control" id="achternaam">
        <?php if (isset($error[''])):?>
            <?php echo $error['achternaam']?>
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email">
        <?php if (isset($error['email'])):?>
            <?php echo $error['email']?>
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="wachtwoord">wachtwoord</label>
        <input type="password" name="wachtwoord" value="" class="form-control" id="wachtwoord">
        <?php if (isset($error['wachtwoord'])):?>
            <?php echo $error['wachtwoord']?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn submit-btn">registreer</button>
</form>