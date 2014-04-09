<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Tabulex forælder log-in
 * Samlet gruppe af IDP'er som kan anvendes som forældre hos Tabulex
 */

$metadata['https://foraelder-login.tabulex.dk'] = array(
	'name' => array(
		'en' => 'Tabulex forælder login',
		'da' => 'Tabulex forælder login',
	),
	'description'          => 'Tabulex Forælder log-in.',
	'SingleSignOnService'  => 'https://foraelder-login.tabulex.dk/simplesaml/saml2/idp/SSOService.php',
	'SingleLogoutService'  => 'https://foraelder-login.tabulex.dk/simplesaml/saml2/idp/SingleLogoutService.php',
	'certFingerprint'      => 'C3:7B:64:B7:F4:45:59:DC:01:08:90:AF:64:47:2E:B0:0C:94:C8:97',
    'authproc' => array(
        10 => array(
            'class' => 'core:AttributeMap',
            'ssn' => 'TabulexIDPUserID',
        ),
        20 => array(
            'class' => 'core:AttributeAdd',
            'TabulexIDPIdent' => 'tabulex-foraelder-login',
        ),
    ),
);

$metadata['https://foraelderintra-login.tabulex.dk'] = array(
	'name' => array(
		'en' => 'Tabulex forælderintra login',
		'da' => 'Tabulex forælderintra login',
	),
	'description'          => 'Tabulex skoleintra log-in.',
	'SingleSignOnService'  => 'https://foraelderintra-login.tabulex.dk/simplesaml/saml2/idp/SSOService.php',
	'SingleLogoutService'  => 'https://foraelderintra-login.tabulex.dk/simplesaml/saml2/idp/SingleLogoutService.php',
	'certFingerprint'      => 'C3:7B:64:B7:F4:45:59:DC:01:08:90:AF:64:47:2E:B0:0C:94:C8:97',
    'authproc' => array(
        10 => array(
            'class' => 'core:AttributeMap',
            'ssn' => 'TabulexIDPUserID',
        ),
        20 => array(
            'class' => 'core:AttributeMap',
            'instcode' => 'TabulexIDPInstCode',
        ),
        30 => array(
            'class' => 'core:AttributeAdd',
            'TabulexIDPIdent' => 'tabulex-foraelderintra-login',
        ),
    ),
);

$metadata['https://saml.test-nemlog-in.dk/'] = array (
    'name' => array(
        'en' => 'NemLog-in',
        'da' => 'NemLog-in',
    ),
    'authproc' => array(
        10 => array(
            'class' => 'core:AttributeMap',
            'dk:gov:saml:attribute:CprNumberIdentifier' => 'TabulexIDPUserID',
        ),
        20 => array(
            'class' => 'core:AttributeAdd',
            'TabulexIDPIdent' => 'nemlog-in',
        ),
    ),
  'entityid' => 'https://saml.test-nemlog-in.dk/',
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' => 'administrative',
      'company' => 'NemLog-in',
      'givenName' => 'Kenneth',
      'surName' => 'Mose Kruuse',
      'emailAddress' =>
      array (
        0 => 'nemlogin@digst.dk',
      ),
      'telephoneNumber' =>
      array (
        0 => '40733354',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'redirect.sign' => true,
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.test-nemlog-in.dk/adfs/ls/',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.test-nemlog-in.dk/adfs/ls/',
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.test-nemlog-in.dk/adfs/ls/',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIFrTCCBRagAwIBAgIEQDgeoDANBgkqhkiG9w0BAQUFADA/MQswCQYDVQQGEwJESzEMMAoGA1UEChMDVERDMSIwIAYDVQQDExlUREMgT0NFUyBTeXN0ZW10ZXN0IENBIElJMB4XDTEyMDUwNzEzMDIzN1oXDTE0MDUwNzEzMzIzN1owgaIxCzAJBgNVBAYTAkRLMTEwLwYDVQQKEyhEaWdpdGFsaXNlcmluZ3NzdHlyZWxzZW4gLy8gQ1ZSOjM0MDUxMTc4MWAwJQYDVQQFEx5DVlI6MzQwNTExNzgtVUlEOjEzMzYwNTUxMTA0NTEwNwYDVQQDEzBEaWdpdGFsaXNlcmluZ3NzdHlyZWxzZW4gLSBEaWdzdCAtIE5lbUxvZy1pbiBUZXMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDnV90kgwkzKmuCtfAb2OORg6DufFoLekR1jDfRyf8qYIkAGEELYiNuatR8o29/gEWibNy/W9i0cMNH44e9t6cPf6GXqqQlFxbV6SWuX4LPMsq7kJiWw+kkV3Ac66jsKVEJduSxHRKfNiFq3Fg4AAFn7TsvQSAapHZXUwMpTNXfqq6BkO9RvJjkMlj3TpDGIgiRMWyQmH84RsL/SjgiLDbkesCToWr8GylQVCascIfihwxxDNM3QJmzt7oZuYX1+uZkQayq57vZxqGldvnhTuAjCNt7nN76Doy584D7kzPU2vrad0sNUrcvPzzHQBj2aKgwuhColBOtLOjcELtKn0C7AgMBAAGjggLMMIICyDAOBgNVHQ8BAf8EBAMCA7gwKwYDVR0QBCQwIoAPMjAxMjA1MDcxMzAyMzdagQ8yMDE0MDUwNzEzMzIzN1owRgYIKwYBBQUHAQEEOjA4MDYGCCsGAQUFBzABhipodHRwOi8vdGVzdC5vY3NwLmNlcnRpZmlrYXQuZGsvb2NzcC9zdGF0dXMwggEDBgNVHSAEgfswgfgwgfUGCSkBAQEBAQEBAzCB5zAvBggrBgEFBQcCARYjaHR0cDovL3d3dy5jZXJ0aWZpa2F0LmRrL3JlcG9zaXRvcnkwgbMGCCsGAQUFBwICMIGmMAoWA1REQzADAgEBGoGXVERDIFRlc3QgQ2VydGlmaWthdGVyIGZyYSBkZW5uZSBDQSB1ZHN0ZWRlcyB1bmRlciBPSUQgMS4xLjEuMS4xLjEuMS4xLjEuMy4gVERDIFRlc3QgQ2VydGlmaWNhdGVzIGZyb20gdGhpcyBDQSBhcmUgaXNzdWVkIHVuZGVyIE9JRCAxLjEuMS4xLjEuMS4xLjEuMS4zLjAcBglghkgBhvhCAQ0EDxYNb3JnYW5XZWJOb0RpcjAcBgNVHREEFTATgRFuZW1sb2dpbkBkaWdzdC5kazCBlwYDVR0fBIGPMIGMMFegVaBTpFEwTzELMAkGA1UEBhMCREsxDDAKBgNVBAoTA1REQzEiMCAGA1UEAxMZVERDIE9DRVMgU3lzdGVtdGVzdCBDQSBJSTEOMAwGA1UEAxMFQ1JMMzIwMaAvoC2GK2h0dHA6Ly90ZXN0LmNybC5vY2VzLmNlcnRpZmlrYXQuZGsvb2Nlcy5jcmwwHwYDVR0jBBgwFoAUHJgJRxpMOLkQxQQpW/H0ToBqzH4wHQYDVR0OBBYEFKhWlVALv2E2JYC8SQPu2jvRXVjqMAkGA1UdEwQCMAAwGQYJKoZIhvZ9B0EABAwwChsEVjcuMQMCA6gwDQYJKoZIhvcNAQEFBQADgYEAQlw2hwwrFX9rehfxsMDkiOJGLJcVmSpK9bA/qDUCr8EU4aBfBE+oIHaAQxmrG9Rsvyhf1rUE+Cir2GQsS5gcG9zIhwEwtCitQutM7dOJ1eIbApmHF8bHike8eouerTcroqM6EY8TbfEkDEtDuQxk+GqbCh5gpKg243ZLZiG3Aes=',
    ),
    1 =>
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIFrTCCBRagAwIBAgIEQDgeoDANBgkqhkiG9w0BAQUFADA/MQswCQYDVQQGEwJESzEMMAoGA1UEChMDVERDMSIwIAYDVQQDExlUREMgT0NFUyBTeXN0ZW10ZXN0IENBIElJMB4XDTEyMDUwNzEzMDIzN1oXDTE0MDUwNzEzMzIzN1owgaIxCzAJBgNVBAYTAkRLMTEwLwYDVQQKEyhEaWdpdGFsaXNlcmluZ3NzdHlyZWxzZW4gLy8gQ1ZSOjM0MDUxMTc4MWAwJQYDVQQFEx5DVlI6MzQwNTExNzgtVUlEOjEzMzYwNTUxMTA0NTEwNwYDVQQDEzBEaWdpdGFsaXNlcmluZ3NzdHlyZWxzZW4gLSBEaWdzdCAtIE5lbUxvZy1pbiBUZXMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDnV90kgwkzKmuCtfAb2OORg6DufFoLekR1jDfRyf8qYIkAGEELYiNuatR8o29/gEWibNy/W9i0cMNH44e9t6cPf6GXqqQlFxbV6SWuX4LPMsq7kJiWw+kkV3Ac66jsKVEJduSxHRKfNiFq3Fg4AAFn7TsvQSAapHZXUwMpTNXfqq6BkO9RvJjkMlj3TpDGIgiRMWyQmH84RsL/SjgiLDbkesCToWr8GylQVCascIfihwxxDNM3QJmzt7oZuYX1+uZkQayq57vZxqGldvnhTuAjCNt7nN76Doy584D7kzPU2vrad0sNUrcvPzzHQBj2aKgwuhColBOtLOjcELtKn0C7AgMBAAGjggLMMIICyDAOBgNVHQ8BAf8EBAMCA7gwKwYDVR0QBCQwIoAPMjAxMjA1MDcxMzAyMzdagQ8yMDE0MDUwNzEzMzIzN1owRgYIKwYBBQUHAQEEOjA4MDYGCCsGAQUFBzABhipodHRwOi8vdGVzdC5vY3NwLmNlcnRpZmlrYXQuZGsvb2NzcC9zdGF0dXMwggEDBgNVHSAEgfswgfgwgfUGCSkBAQEBAQEBAzCB5zAvBggrBgEFBQcCARYjaHR0cDovL3d3dy5jZXJ0aWZpa2F0LmRrL3JlcG9zaXRvcnkwgbMGCCsGAQUFBwICMIGmMAoWA1REQzADAgEBGoGXVERDIFRlc3QgQ2VydGlmaWthdGVyIGZyYSBkZW5uZSBDQSB1ZHN0ZWRlcyB1bmRlciBPSUQgMS4xLjEuMS4xLjEuMS4xLjEuMy4gVERDIFRlc3QgQ2VydGlmaWNhdGVzIGZyb20gdGhpcyBDQSBhcmUgaXNzdWVkIHVuZGVyIE9JRCAxLjEuMS4xLjEuMS4xLjEuMS4zLjAcBglghkgBhvhCAQ0EDxYNb3JnYW5XZWJOb0RpcjAcBgNVHREEFTATgRFuZW1sb2dpbkBkaWdzdC5kazCBlwYDVR0fBIGPMIGMMFegVaBTpFEwTzELMAkGA1UEBhMCREsxDDAKBgNVBAoTA1REQzEiMCAGA1UEAxMZVERDIE9DRVMgU3lzdGVtdGVzdCBDQSBJSTEOMAwGA1UEAxMFQ1JMMzIwMaAvoC2GK2h0dHA6Ly90ZXN0LmNybC5vY2VzLmNlcnRpZmlrYXQuZGsvb2Nlcy5jcmwwHwYDVR0jBBgwFoAUHJgJRxpMOLkQxQQpW/H0ToBqzH4wHQYDVR0OBBYEFKhWlVALv2E2JYC8SQPu2jvRXVjqMAkGA1UdEwQCMAAwGQYJKoZIhvZ9B0EABAwwChsEVjcuMQMCA6gwDQYJKoZIhvcNAQEFBQADgYEAQlw2hwwrFX9rehfxsMDkiOJGLJcVmSpK9bA/qDUCr8EU4aBfBE+oIHaAQxmrG9Rsvyhf1rUE+Cir2GQsS5gcG9zIhwEwtCitQutM7dOJ1eIbApmHF8bHike8eouerTcroqM6EY8TbfEkDEtDuQxk+GqbCh5gpKg243ZLZiG3Aes=',
    ),
  ),
);