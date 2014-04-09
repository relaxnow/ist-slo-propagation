<?php
/**
 * SAML 2.0 IdP configuration for simpleSAMLphp.
 */

/*
 * Proxy's
 * Herunder findes proxyen som styrer rolle opdellingen
*/

$metadata['https://saml.borger.tabulex.dk'] = array(
    'host' => 'saml.borger.tabulex.dk',
    'privatekey' => 'nemidPrivateKey.key',
    'certificate' => 'nemidPublic.pem',
    'auth' => 'borger',
);

/*
*  Forældre hostede IDP'er
*/

$metadata['https://foraelder-login.tabulex.dk'] = array(
    'host' => 'foraelder-login.tabulex.dk',
    'privatekey' => 'wildcard.tabulex.idp.pem',
    'certificate' => 'wildcard.tabulex.idp.crt',
    'auth' => 'tabulexforaelderlogin'
);

$metadata['https://foraelderintra-login.tabulex.dk'] = array(
    'host' => 'foraelderintra-login.tabulex.dk',
    'privatekey' => 'wildcard.tabulex.idp.pem',
    'certificate' => 'wildcard.tabulex.idp.crt',
    'auth' => 'tabulexintralogin'
);