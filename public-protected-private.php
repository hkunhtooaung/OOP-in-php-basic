<?php 
/**
 * 
 */
class Language
{
	public $name = 'Myanmar';
	protected $nationality = 'Kachin';
	private $word = 'ahkayar';

	public function pubilicc () {
		return 'This is public function';
	}
	protected function protectedd() {
		return 'This is protected function';
	}
	private function privatee() {
		return 'This is private function';
	}
}
$language = new Language;
$language->name;
// $language->kachin;
$language->word;
?>