<?
    //1
    $name = 'Михаил. ';
    $age = 26;
    
    echo 'Меня зовут '.$name.'';
    echo 'Мне '.$age.' лет. ';
    unset($name);
    unset($age);
    echo '<br>';
    //2
    
    define('city','Новосибирск. ');
    
    if(city){
        echo city;
    }  
    echo '<br>';
    //3
    
    $book = array();
    $book['tittle'] = '99 франков';
    $book['author'] = 'Фредерик Бегбедер';
    $book['pages'] = 400;
    echo 'Недавно я прочитал книгу \'' . $book['tittle'] . '\''
    . ' , написанную автором ' . $book['author'] . ', я осилил все ' .  
     $book['pages'] . ' страниц, мне она очень понравилась.';
    echo '<br>';
    //4
    
    $book1 = array('title'=>'99 франков', 'author'=>'Фредерик Бегбедер', 'pages'=>400);
    $book2 = array('title'=>'Пётр первый', 'author'=>'А.Н. Толстой', 'pages'=>720);
    $book = array($book1, $book2);
    echo 'Недавно я прочитал книги ' . $book[0]['title'] .  ' и ' . $book[1]['title'] .  ', написанные соответственно авторами ' . $book[0]['author'] . ' и ' . $book[1]['author'] . ", я осилил в сумме " . ($book[0]['pages']+$book[1]['pages']) .  ' страницы, не ожидал от себя подобного';
?>