<?php

class coasterView {

	public function showHeader($pageTitle = '') {
		include "views/header.inc";
	}

	public function showFooter() {
		include "views/footer.inc";
	}

	public function showCoaster($rows) {
		include "views/showCoaster.inc";
	}

	public function showCoasterDetails($rows) {
		include "views/showCoasterDetails.inc";
	}
}