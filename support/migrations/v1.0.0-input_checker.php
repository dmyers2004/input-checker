<?php

class v100_input_checker extends package_migration {

	public function up() {
		$this->down();

		$this->add_symlink(get_path('{WWW Shared Plugins}/input-checker',true));

		return true;
	}

	public function down() {
		$this->remove_symlink(get_path('{WWW Shared Plugins}/input-checker',true));

		return true;
	}

}