<?php

namespace JuanChimienti;

function styles(\PhpCsFixer\Finder $finder, array $rules = []): \PhpCsFixer\Config
{
	$rules = array_merge($rules, [
		'@PSR12' => TRUE,
		'indentation_type' => TRUE,
		'method_chaining_indentation' => TRUE,
		'array_indentation' => TRUE,
		'array_syntax' => ['syntax' => 'short'],
		'braces' => [
			'position_after_anonymous_constructs' => 'next', // this is for functions
			'position_after_control_structures' => 'next' // this for if-else structures
		],
		'constant_case' => [
			'case' => 'upper'
		]]);
	$config = new \PhpCsFixer\Config();

	return $config->setRules($rules)
		->setIndent("\t")
		->setLineEnding("\n")
		->setFinder($finder);
}
