<?php

namespace JuanChimienti;

function styles(\PhpCsFixer\Finder $finder, array $rules = []): \PhpCsFixer\ConfigInterface
{
	$rules = array_merge($rules, [
		'@PSR12' => TRUE,
		'indentation_type' => TRUE,
		'method_chaining_indentation' => TRUE,
		'array_indentation' => TRUE,
		'array_syntax' => [
			'syntax' => 'short',
		],
		'curly_braces_position' => [
			'control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end', // this for if-else structures
			'functions_opening_brace' => 'next_line_unless_newline_at_signature_end', // this is for functions
			'anonymous_functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
			'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
			'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
		],
		'control_structure_continuation_position' => [
			'position' => 'next_line',
		],
		'constant_case' => [
			'case' => 'upper',
		],
		'no_multiline_whitespace_around_double_arrow' => TRUE,
		'binary_operator_spaces' => [
			'operators' => [
				'=>' => 'single_space',
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
