<?php

/*$metadata['urn:federation:localhost'] = array(
	'prp' => 'https://localhost/adfs/ls/',
	'simplesaml.nameidattribute' => 'uid',
	'authproc' => array(
		50 => array(
			'class' => 'core:AttributeLimit',
			'cn', 'mail', 'uid', 'eduPersonAffiliation',
		),
	),
);*/

$metadata['https://tea-f.tabulex.net/'] = array(
	'prp' => 'https://tea-f.tabulex.net/',
	'simplesaml.nameidattribute' => 'TabulexIDPUserID',
);

$metadata['https://tea-e.tabulex.net/'] = array(
	'prp' => 'https://tea-e.tabulex.net/',
	'simplesaml.nameidattribute' => 'TabulexIDPUserID',
);


?>