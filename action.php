<?

// This file is generated by Composer
require_once 'vendor/autoload.php';

// Creating variables
$git_name = $_POST['git_name'];
$user = 'USER_NAME';
$password = 'USER_PASSWORD';
$token = 'USER_TOKEN';
$site = 'http://YOUR_SITE.com';
$decription = 'YOUR_DESCRIPTION'

// Using git-hub-api
$client = new \Github\Client();
$asd = $client->authenticate($token, '', Github\Client::AUTH_HTTP_TOKEN);

// Get user's repositories
$repo = $client->api('current_user')->repositories();

$repos = $client->api('repo')->all();

// Creating repostiory
$repo = $client->api('repo')->create($git_name, $decription, $site, true);

print_r ($repo);