<?php

$config = array(
	'borger' => array(
		'saml:SP',
		'name' => array(
			'en' => 'Borger'
		),
		'entityID' => 'https://saml.borger.tabulex.dk',
        'idp' => NULL,
        'discoURL' => NULL,
	    'certificate' => 'funktionscert.pem',
	    'privatekey' => 'funktionscertkey.pem',
		'attributes' 		=> array(
			'dk:gov:saml:attribute:AssuranceLevel',
			'dk:gov:saml:attribute:SpecVer',
			'dk:gov:saml:attribute:CprNumberIdentifier',
			'dk:gov:saml:attribute:PidNumberIdentifier',
			'urn:oid:2.5.4.5',
			'urn:oid:2.5.4.4',
			'urn:oid:2.5.4.3',
			'urn:oid:0.9.2342.19200300.100.1.1',
			'urn:oid:0.9.2342.19200300.100.1.3',
			'dk:gov:saml:attribute:IsYouthCert',
			'urn:oid:2.5.29.29',
		),
		'NameIDFormat'		=> 'urn:oasis:names:tc:SAML:1.1:nameid-format:X509SubjectName',
		'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:basic',
	    'acs.Bindings' => array(
        	'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
    	),
        'authproc' => array(
			10 => array(
			    'class' => 'core:PHP',
			    'code' => '
				    $handle = fopen("/var/log/idp/auth-foraelder.log", "a");
				    fwrite($handle, "[".date("d/m-Y H:i:s")."][SUCCESS] TabulexIDPIdent:" . $attributes["TabulexIDPIdent"][0] . "|uid:" . $attributes["uid"][0] . "|TabulexIDPUserID:" . $attributes["TabulexIDPUserID"][0] . "|IP:" . $_SERVER["REMOTE_ADDR"] . "\r\n");
				    fclose($handle);
			    ',
			),
    	),
	),

	'tabulexforaelderlogin' => array(
		'tabulexforaelderlogin:login',
		'salt' => 'xxx',
		'faelles' => array(
			'xxx'
			,'xxx'
			,'xxx'
			,'xxx'
			,'ISO8859_1'
			,'0'
			,'3'
		)
	),

	'tabulexintralogin' => array(
		'tabulexintralogin:login',
		'salt' => 'xxx',
		'localdb' => array(
			'localhost'
			,'xxx'
			,'xxx'
			,'borgere'
		),
		'trustedsp' => array(
			/* Forælder */
			'sfoforaelder' => array(
				'idp' => 'https://foraelderintra-login.tabulex.dk',
				'entityid' => 'https://saml.borger.tabulex.dk',
				'relaystate' => 'https://www.testsfoweb.dk/testsp/sso.php?appid=sfoforaelder'
			),
			'bornewebforaeldre' => array(
				'idp' => 'https://foraelderintra-login.tabulex.dk',
				'entityid' => 'https://saml.borger.tabulex.dk',
				'relaystate' => 'https://stengaarden.localsfoweb.dk/typo3conf/ext/tmsfo/pi2/sso.php'
			),
			'klubwebforaeldre' => array(
				'idp' => 'https://foraelderintra-login.tabulex.dk',
				'entityid' => 'https://saml.borger.tabulex.dk',
				'relaystate' => 'https://stengaarden.localsfoweb.dk/typo3conf/ext/tmsfo/pi2/sso.php'
			),
			'teaforaeldrefravaer' => array(
				'idp' => 'https://foraelderintra-login.tabulex.dk',
				'entityid' => 'https://saml.borger.tabulex.dk',
				'relaystate' => 'https://tea.tabulex.net/unic/teaforaeldrefravaer'
			),
			'teaforaeldrekarakter' => array(
				'idp' => 'https://foraelderintra-login.tabulex.dk',
				'entityid' => 'https://saml.borger.tabulex.dk',
				'relaystate' => 'https://tea.tabulex.net/unic/teaforaeldrekarakter'
			),
		)
	),

);