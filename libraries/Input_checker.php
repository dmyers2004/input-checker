<?php

class Input_checker {

	public function __construct() {
		ci()->page->js('/plugins/input-checker/input-checker.min.js');
	}
	
	static public function checker($name,$value,$matches=1,$extra=[]) {
		$defaults = ['checked'=>1,'unchecked'=>0];
		$list = array_merge($defaults, $extra);
		$checked = ($value == $matches) ? ' checked' : '';

		echo '<input type="checkbox" class="checkers" data-real="'.$name.'" data-checked="'.$list['checked'].'" data-unchecked="'.$list['unchecked'].'"'.$checked.'>';
	}

	static public function checker($name,$value,$matches=1,$extra=[]) {
		$text = $extra['text'];
		unset($extra['text']);

		self::start_inline_checkbox();
		self::checker($name,$value,$matches,$extra);
		echo ' '.$text;
		self::end_inline_checkbox();
	}

} /* end class */