<?php

namespace JuanChimienti;

function styles(\PhpCsFixer\Finder $finder, array $rules = []): \PhpCsFixer\Config
{
	$rules = array_merge($rules, [
		'@PSR12' => TRUE,
		'indentation_type' => TRUE,
		'method_chaining_indentation' => TRUE,
		'array_indentation' => TRUE,
		'array_syntax' => [
			'syntax' => 'short',
		],
		'braces' => [
			'position_after_anonymous_constructs' => 'next', // this is for functions
			'position_after_control_structures' => 'next', // this for if-else structures
		],
		'constant_case' => [
			'case' => 'upper',
		],
		'no_multiline_whitespace_around_double_arrow' => TRUE,
		'binary_operator_spaces' => [
			"operators" => [
				"=>" => "single_space",
			],
		],
		'trailing_comma_in_multiline' => TRUE,
		'blank_line_before_statement' => [
			'statements' => ['return'],
		],
		'no_unused_imports' => TRUE,
		'no_blank_lines_after_class_opening' => TRUE,
	]);
	$config = new \PhpCsFixer\Config();

	return $config->setRules($rules)
		->setIndent("\t")
		->setLineEnding("\n")
		->setFinder($finder);
}
