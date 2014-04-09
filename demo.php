<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once(getcwd(). '/simplesamlphp/vendor/autoload.php');

$authSource = 'default-sp';
if (strpos($_SERVER['HTTP_HOST'], 'idp.theirs') === 0) {
    $authSource = 'example-userpass';
}

$as = new SimpleSAML_Auth_Simple($authSource);

if (isset($_POST['authenticate'])) {
    $as->requireAuth();
}
if (isset($_POST['logout'])) {
    $as->logout();
}
echo "<h2>Authentication Source: $authSource</h2>";
if ($as->isAuthenticated()) {
    echo "<h2>Authenticated as:</h2>";
    echo "<pre>";
    var_export($as->getAttributes());
    echo "<pre>";
    echo '<form method="POST"><input type="submit" name="logout" value="Logout" /></form>';
}
else {
    echo "<h2>Not authenticated</h2>";
    echo '<form method="POST"><input type="submit" name="authenticate" value="Authenticate" /></form>';
}