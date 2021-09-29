<?php $this->layout('layouts::website')?>

<h3>inschrijven</h3>

<form action="<?php echo url("register.handle")?>" method="POST">

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