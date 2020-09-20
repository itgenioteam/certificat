<?php

class Base
{
  
    public static function select($query){//, $clause = array()
        $db = Db::getInstance()->getConnection();
        // $whwre = 'WHERE ';
        // $values = array_values($clause);
        // foreach(array_keys($clause) as $key){
        //     $whwre .= "$key = ?"
        // }
        $sth = $db->prepare($query);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        return $sth->fetchAll();
    }

    public static function redirect($url){
        $url=rootFolder.$url;
        ?><script>document.location.href='<?php echo $url; ?>'</script><?php
    }

    //Ф-я отправки
    public static function sendMail($to, $message){
        $address = '172.20.0.68'; 
        $port    = 25;          
        $login   = 'sno2018' ;   
        $pwd     = 'xsWMIZpZf#Wkdq';    
        $from    = 'sno2019@bsmu.by' ;  

        // $to      = 'niki1995-11@mail.ru';  
        // $message='Здравствуйте!<br>Вы успешно зарегистрировались на сайте <a href="'.$_SERVER['HTTP_HOST'].'">'.$_SERVER['HTTP_HOST'].'</a><br><strong>Логин:</strong><span></span><br><strong>Пароль:</strong><span></span><br><br><em>С уважением, руководство СНО БГМУ.</em>';

        try {
           
            // Создание сокета
            $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
            if ($socket < 0) {
                throw new Exception('socket_create() failed: '.socket_strerror(socket_last_error())."\n");
            }

            // Соединение сокета к серверу
            $result = socket_connect($socket, $address, $port);
            if ($result === false) {
                throw new Exception('socket_connect() failed: '.socket_strerror(socket_last_error())."\n");
            } 
           
            // Чтение информацию о сервере
            self::read_smtp_answer($socket);
            self::write_smtp_response($socket, 'EHLO '.$login);
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, 'AUTH LOGIN');
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, base64_encode($login));
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, base64_encode($pwd));
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, 'MAIL FROM:<'.$from.'>');
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, 'RCPT TO:<'.$to.'>');
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, 'DATA');
            self::read_smtp_answer($socket); // ответ сервера
          
           $message = "To: $to\r\n\r\n".$message; // добавление заголовока
           // $message = "Content-type: text/html; charset=windows-1251\r\n".$message."<br/><br/>"."<strong>Имя отправителя:</strong> <br/> "."<strong>Электронный адрес отправителя:</strong> ".$email."<br/>"."<strong>Тема сообщения:</strong><br/><br/><strong>Текст сообщения:</strong> <br/>"; // заголовок "тема сообщения"
           $message = "Content-type: text/html; charset=UTF-8\r\n".$message; // заголовок "тема сообщения"

            self::write_smtp_response($socket, $message."\r\n.");
            self::read_smtp_answer($socket); // ответ сервера
            self::write_smtp_response($socket, 'QUIT');
            self::read_smtp_answer($socket); // ответ сервера
        } catch (Exception $e) {
            // echo "\nError: ".$e->getMessage();
        }
       
        if (isset($socket)) {
            socket_close($socket);
            // echo "отправлено";
        }
    }

    private static function read_smtp_answer($socket) {
        $read = socket_read($socket, 1024);
           
        if ($read{0} != '2' && $read{0} != '3') {
            if (!empty($read)) {
                throw new Exception('SMTP failed: '.$read."\n");
            } else {
                throw new Exception('Unknown error'."\n");
            }
        }
    }
   
    // Функция для отправки запроса серверу
    private static function write_smtp_response($socket, $msg) {
        $msg = $msg."\r\n";
        socket_write($socket, $msg, strlen($msg));
    }

     public static function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '_');
    return str_replace($rus, $lat, $str);
}


}

