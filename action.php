<?

This file is generated by Composer
require_once 'vendor/autoload.php';
$client = new \Github\Client();
$asd = $client->authenticate('bd3876c0ffb7f346e0026413fc3b36adfd377d69', '', Github\Client::AUTH_HTTP_TOKEN);

$repo = $client->api('current_user')->repositories();

$repos = $client->api('repo')->all();
$repo = $client->api('repo')->create('test_repo', 'This is the description of a repo', 'http://my-repo-homepage.org', true);

print_r ($repo);