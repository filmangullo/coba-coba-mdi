<?php
namespace App\Services;

class CMSService {
	public static function type($m) {
		switch($m->type) {
			case 'about':
				return 'About Us Page';
			case 'main':
				return 'Main Menu';
			case 'page':
				return 'Page';
			default:
				return 'Error!';
		}
	}
}