<?php
return array(
		"urlFormat"      => "path",
		"urlSuffix"      => "/",
		"showScriptName" => false,
		'urlRuleClass'   => 'CUrlRule',
		"rules"          => array(
				""                   => "site/index",
				"product/<id:\d+>/" => "site/product",
				"review/<product_id:\d+>/" => "site/review",
		)
);