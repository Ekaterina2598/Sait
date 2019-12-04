<?
	try
	{
		$conn = new PDO(
			'mysql:host=localhost;dbname=rubydb', //передаём данные по названию сервера и названию БД
			"root", //имя пользователя/администратора
			"", //пароль доступа
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")//задаём команду при подключении к MySQL-серверу (а именно: принимаем кодировку UTF-8)
		);//создаём подключение к БД
	}
	catch (PDOException $e)//если происходит исключение, то
	{
		die($e->getMessage());//выводим сообщение об ошибке
	}
?>