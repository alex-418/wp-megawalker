<?php
	// Add the following two things to your App.php controller

	/**
	 * This should go at the top before "class App extends Controller {}"
	 */
	use alex418\MegaWalker;

	/**
	 * Add this method to your App class
	 * It returns $nav_walker for use in header.blade.php
	 *
	 * @return MegaWalker
	 */
	public function navWalker() {
	return new MegaWalker();
}