<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: http://simplesamlphp.org/docs/trunk/simplesamlphp-reference-sp-remote
 */

/*
* SP metadata for selve PHP applikationen
*/
$metadata['tabulexsfo-foraelder'] = array (
  'entityid' => 'tabulexsfo-foraelder',
  'contacts' => array(),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 'https://www.testsfoweb.dk/testsp/sso.php',
  'SingleLogoutService' => 'https://www.testsfoweb.dk/testsp/slo.php',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:X509SubjectName',
  'userid.attribute' => 'TabulexIDPUserID',
  'simplesaml.nameidattribute' => 'TabulexIDPUserID',
  'authproc' => array(
    10 => array(
        'class' => 'core:AttributeAdd',
        'TabulexIDPRole' => 'borger',
    ),
  ),
);

/*
* SP metadata for SSP. SSP fungerer her som SP i forhold til sig selv
* Herunder SP for forælder delen
*/
$metadata['https://saml.borger.tabulex.dk'] = array (
  'entityid' => 'https://saml.borger.tabulex.dk',
  'contacts' => array(),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 'https://saml.borger.tabulex.dk/simplesaml/module.php/saml/sp/saml2-acs.php/borger',
  'SingleLogoutService' => 'https://saml.borger.tabulex.dk/simplesaml/module.php/saml/sp/saml2-logout.php/borger',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:X509SubjectName',
  'userid.attribute' => 'ssn',
  'simplesaml.nameidattribute' => 'ssn',
);