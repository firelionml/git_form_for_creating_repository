<?

$git_name = $_POST['git_name'];
$user = 'haseri';
$password = 'debalitrium121';
$token = 'd91f7d3924dc5faf8a4ccad2c216d451dc378efa';

// Github REST API example from https://gist.github.com/odan/e4b83b5dce16efe25f836ec41cf02c5a
function github_request($url)
{
    $ch = curl_init();
    
    // Basic Authentication with token
    // https://developer.github.com/v3/auth/
    // https://github.com/blog/1509-personal-api-tokens
    // https://github.com/settings/tokens
    $access = $user . ':' . $token;
    
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
    curl_setopt($ch, CURLOPT_USERAGENT, $user);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $access);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    curl_close($ch);
    $result = json_decode(trim($output), true);
    return $result;
}
$repos = github_request('https://api.github.com/user/repos');
print_r($repos);
//$events = github_request('https://api.github.com/users/:username/events?page=1&per_page=5');
// $events = github_request('https://api.github.com/users/:username/events/public?page=1&per_page=5');
// print_r($events);
// $feeds = github_request('https://api.github.com/feeds/:username?page=1&per_page=5');
// print_r($feeds);