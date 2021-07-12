<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Tailwind;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class TailwindDarkAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/tailwindcss/dist';

    public array $css = [
        'tailwind-dark.css',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**tailwind-dark.css',
            ),
        ];
    }
}
