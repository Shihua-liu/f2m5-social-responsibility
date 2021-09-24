<?php $this->layout('layouts::website')?>

<h3>inschrijven</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="voornaam">voornaam</label>
        <input type="text" name="firstnaam" value="" class="form-control" id="voornaam">
    </div>

    <div class="form-group">
        <label for="achternaam">achternaam</label>
        <input type="text" name="lastname" value="" class="form-control" id="achternaam">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" value="" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="wachtwoord">wachtwoord</label>
        <input type="password" name="password" value="" class="form-control" id="wachtwoord">
    </div>
    <button type="submit" class="btn submit-btn">registreer</button>
</form>