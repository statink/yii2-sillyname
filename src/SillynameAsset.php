<?php

/**
 * @copyright Copyright (C) 2015-2021 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@fetus.jp>
 */

declare(strict_types=1);

namespace statink\yii2\sillyname;

class SillynameAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/statink/yii2-sillyname/assets';
    public $js = [
        'sillyname.min.js',
    ];
}
