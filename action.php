<?

$git_name = $_POST['git_name'];
$user = 'USER_NAME';
$password = 'USER_PASS';


// Выполнение команды в формате: 
// curl -u 'username:password' https://api.github.com/user/repos -d '{"name":"название_проекта","description":"Описание"}'

$create = 'curl -u ' . '\'' . $user . $password . '\'' . 'https://api.github.com/user/repos -d \' {"name":"' . $git_name . '"}\''