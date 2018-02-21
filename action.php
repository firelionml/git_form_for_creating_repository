<?

// $git_name = $_POST['git_name'];
// $user = 'USER_NAME';
// $password = 'USER_PASS';


// // Выполнение команды в формате: 
// // curl -u 'username:password' https://api.github.com/user/repos -d '{"name":"название_проекта","description":"Описание"}'
// $create = 'curl -u ' . '\'' . $user . ':' . $password . '\'' . ' ' . 'https://api.github.com/user/repos -d \'{"name":"' . $git_name . '"}\'';

// echo $create;

// if(isset($_POST['git_name']) && !empty($_POST['git_name'])) {
// 	// Создаем новый json-файл
// 	$fp = fopen('create.json', 'w');
// 	// Записываем туда наш результат из $create
// 	fwrite($fp, $create);
// }

?>

<?

$git_name = $_POST['git_name'];
$user = 'haseri';
$password = 'debalitrium121';

if(isset($_POST['git_name']) && !empty($_POST['git_name'])) {
	$create = shell_exec('curl -u ' . '\'' . $user . ':' . $password . '\'' . ' ' . 'https://api.github.com/user/repos -d \'{"name":"' . $git_name . '"}\'');
}
echo $create;

?>