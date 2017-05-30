<?php
namespace barrelstrength\sproutforms\assetbundles;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class FormAsset extends AssetBundle
{
	public function init()
	{
		// define the path that your publishable resources live
		$this->sourcePath = '@barrelstrength/sproutforms/resources';

		// define the dependencies
		$this->depends = [
			CpAsset::class,
		];

		// define the relative path to CSS/JS files that should be registered with the page
		// when this asset bundle is registered
		$this->js = [
			'js/sproutfield.js',
			'js/fieldmodal.js',
		];

		$this->css = [
			'css/fonts/css/font-awesome.min.css'
		];

		parent::init();
	}
}