<?php

namespace efureev\dadata;

use yii\web\AssetBundle;

/**
 * Jquery Autocomplete AssetBundle
 */
class AutocompleteAsset extends AssetBundle
{
    public $sourcePath = '@bower/devbridge-autocomplete/dist';

    public $js = [
        'jquery.autocomplete.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}