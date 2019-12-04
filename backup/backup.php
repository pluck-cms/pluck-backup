<?php
//MODULE NAME: Backup setting directory

//Make sure the file isn't accessed directly
defined('IN_PLUCK') or exit('Access denied!');

function backup_info() {
	global $lang;
	return array(
		'name'          => $lang['backup']['name'],
		'intro'         => $lang['backup']['intro'],
		'version'       => '0.7',
		'author'        => 'ekyo',
		'website'       => 'https://github.com/pluck-cms/pluck-backup',
		'icon'          => 'images/view.png',
		'compatibility' => '4.7'
	);
}
?>