<?php

/**
 * Обработчик формы
 * @author Дизайн студия ox2.ru 
 */
	//Если форма была отправленна, то выводим ее содержимое на экран
	// if (isset($_POST["name"])) { 
	//     //Данные отправляются в кодировке utf-8, поэтому конвертим в cp1251
	//     echo "Ваше имя: " . iconv("utf-8", "utf-8", $_POST["name"]) . "<br/>"; 
	//     echo "Ваш телефон: " . $_POST["phone-number"] . "<br/>";
	// }


	 
	// если была нажата кнопка "Отправить" 

		$title = 'Заявка на обратный звонок';

		$mess = "Имя - ". iconv("utf-8", "utf-8", $_POST["name"]) . ",   Телефон - ". $_POST["phone-number"];
        // $to - кому отправляем 
        $to = 'mirwex@yandex.ru'; 
        // $from - от кого 
        $from='noreply@valeraa.ru'; 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.';



?>