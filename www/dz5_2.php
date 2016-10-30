<?
//POST

$news='Четыре новосибирские компании вошли в сотню лучших работодателей
Выставка университетов США: открой новые горизонты
Оценку «неудовлетворительно» по качеству получает каждая 5-я квартира в новостройке
Студент-изобретатель раскрыл запутанное преступление
Хоккей: «Сибирь» выстояла против «Ак Барса» в пятом матче плей-офф
Здоровое питание: вегетарианская кулинария
День святого Патрика: угощения, пивной теннис и уличные гуляния с огнем
«Красный факел» пустит публику на ночные экскурсии за кулисы и по закоулкам столетнего здания
Звезды телешоу «Голос» Наргиз Закирова и Гела Гуралиа споют в «Маяковском»';
$news=  explode("\n", $news);
//print_r($news);

foreach ($news as $key=>$value){
       
    }
   
function all(){
    global $news;
    foreach ($news as $key=>$value){
        echo $value.'<br>';
    }
}
function news(){
    global $news, $key;
    if($_POST['id']>$key){
        all();
    }  else {
    echo $news[$_POST['id']];
}}
if ($_POST['id']){
    news();
}else {
    header("HTTP/1.0 404 Not Found");
}
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
 </head>
 <body>

     <form method="POST" action="dz5_2.php">
     <input type="text" name="id">
  <p><input type="submit"></p>
 </form>

 </body>
</html>