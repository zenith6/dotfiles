<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        'align_double_arrow',
        'concat_with_spaces',
        'newline_after_open_tag',
        'ordered_use',
        'phpdoc_order',
        'short_array_syntax',
    ])
    ->finder($finder);
