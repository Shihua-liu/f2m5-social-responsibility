<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class registratiecontroller {

	public function registerform() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');

	}
	public function registerprocess() {
		echo ("FORM komt er aan!!");
	}
}

