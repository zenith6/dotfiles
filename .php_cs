<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__);

$fixers = [
    'blankline_after_open_tag',
    'concat_without_spaces',
    'double_arrow_multiline_whitespaces',
    'duplicate_semicolon',
    'empty_return',
    'extra_empty_lines',
    'include',
    'join_function',
    'list_commas',
    'multiline_array_trailing_comma',
    'namespace_no_leading_whitespace',
    'new_with_braces',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'object_operator',
    'operators_spaces',
    'phpdoc_indent',
    'phpdoc_inline_tag',
    'phpdoc_no_access',
    'phpdoc_no_empty_return',
    'phpdoc_no_package',
    'phpdoc_params',
    'phpdoc_scalar',
    'phpdoc_separation',
    'phpdoc_short_description',
    'phpdoc_to_comment',
    'phpdoc_trim',
    'phpdoc_type_to_var',
    'phpdoc_var_without_name',
    'pre_increment',
    'remove_leading_slash_use',
    'remove_lines_between_uses',
    'return',
    'self_accessor',
    'single_array_no_trailing_comma',
    'single_blank_line_before_namespace',
    'single_quote',
    'spaces_before_semicolon',
    'standardize_not_equal',
    'ternary_spaces',
    'trim_array_spaces',
    'unalign_equals',
    'unary_operators_spaces',
    'unused_use',
    'whitespacy_lines',
    'align_double_arrow',
    'concat_with_spaces',
    'newline_after_open_tag',
    'ordered_use',
    'phpdoc_order',
    'short_array_syntax',
];

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers($fixers)
    ->finder($finder);
