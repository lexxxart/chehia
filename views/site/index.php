<?php

/* @var $this yii\web\View */

$this->title = 'Чехия тестовое задание';
 
  $c1=$_GET['c1'];
if($c3>0){echo"<meta http-equiv=refresh content='2;URL=http://amursite2.tmweb.ru' />";}
?>
<div class="site-index">
		<?php
	
 


      if(!Yii::$app->user->isGuest)
            echo "<font color=red>ВАШ ТЕКУЩИЙ Денежный счет :  "  ;
		
		
	 foreach ($schet as $schet1)
		{
		echo "$schet1->name : $schet1->money руб.
		 <br>";
		 } 
 
		
		  echo "<br>Счет в бонусных баллах : </font>";
		  
		   
		//echo "переменная c3 $c3.  <br>";
		 
		   
      ?> 

    <div class="jumbotron">
        <h1>Тест в Чехию первое знакомство с фреймворком Yii2</h1>

        <p class="lead">Для того, чтобы получить приз пройдите аунтефикацию и у вас появится кнопка</p>
      
       <?php
        if(Yii::$app->user->isGuest)
            echo '<font color=red>Нажмите на кнопку Login сверху справа</font>';
      ?>
      
      
      
      
      
  <?php
  

	  
	  
       
      if(!Yii::$app->user->isGuest)
            echo '<font color=green>ПОЗДРАВЛЯЕМ ТЕПЕРЬ ВЫ МОЖЕТЕ ПОЛУЧИТЬ ПРИЗ - НАЖМИТЕ НА ЭТУ КНОПКУ </font>';
      
                    
                 
      if(!Yii::$app->user->isGuest)
        
        
        $submit1=$_GET['submit1'];
        $perechislit=$_GET['perechislit'];
     
        if($perechislit==1){echo "<font size='+4'><br><b>Вы Зачислили Деньги $c1 $c3 на свой денежный счет?</b>
		
		
		 
		
		";
		
		 $schet1->money= $schet1->money+$c1;
		 
		 $newmoney=$schet1->money;
		 
		 $schet1->money=$newmoney;

		 //$bankid->money="$newmoney";
		 echo "После обновления ваш новый балланс будет $newmoney </font>"; 
		//  NewSchet($newmoney);
		// NewSchet();
		}
      
        if($submit1=="Нажмите для генерации"){
          $type=rand(1, 3);
          
          
          echo "<br>ТИП приза - $type"; 
        
        
        } 
        
              
            echo " 
              <form action='' metod=Get>
  
              <br><input type='submit' value='Нажмите для генерации' name=submit1>
              </form>
                             
                ";
            
      $submit1="пусто";
      echo"<font size='+3'>";
              if($type==1){$a1=1; $b1=1000;  $c1=rand($a1, $b1);  echo"<br> Вы выиграли -  денежный приз $c1 руб.  <br><br><a href='/index.php?c1=$c1&perechislit=1&submit=0'>Зачислить на денежный счет</a> / <a href=''>Конвертировать в баллы с коэффициентом </a>"; }
              if($type==2){$a2=1; $b2=1000;  $c2=rand($a2, $b2) ; echo"<br> Вы выиграли -  бонуссные баллы  - $c2  <br><br><a href=''>Перевести на баш балловый счет</a> "; }
      		 
      
      
      
      if($type==3){$c3=rand(1, 3); echo"<br> Вы выиграли - физический предмет $c3 <br><br>ЗАПОЛНИТЕ ФОРМУ АДРЕСА КУДА ОТПРАВИТЬ ВАМ ПРИЗ 
       <br>ФИО <input type=test name=fio value='$fio'>
              <br>АДРЕС <input type=test name=adres value='$adres'>
              <br><input type='submit' value='Готово'>
              </form>       
              
              ";
    
      }
      
      echo"</font> ";   
      ?>
      
     
      
      
      

      <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>
  
  
  
  

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Денежный приз</h2>

                <p>(случайная сумма в интервале)<br> Денежный приз может
быть перечислен на счет пользователя в банке (HTTP запрос к API банка)</p>

              Денежный приз может конвертироваться в баллы лояльности с учетом
коэфициэнта. От приза можно отказаться. Деньги и предметы ограничены, баллы
лояльности нет.
              
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>бонусные баллы</h2>

                <p>(случайная сумма в интервале)  <br> баллы
зачислены на счет лояльности в приложении, предмет отправлен по почте (вручную
работником)</p>
              
              
     <?php             
      if(!Yii::$app->user->isGuest)
        
         $a4=$_GET['a4'];
         $b4=$_GET['b4'];
         $c4=rand($a4, $b4) ;
              
            echo "<font color=green>Введите переменные интервала a, b</font>
              <form action='' metod=Get>
              <input type=test name=a4 value='$a4'>
              <br><input type=test name=b4 value='$b4'>
              <br><input type='submit' value='Генерировать'>
              </form>
                             
                ";
             
              
              echo "<br><h3>Ваш результат баллов - $c4</h3>";
      ?>
      
              

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>физический предмет</h2>

                <p>(случайный предмет из списка) <br>
</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
      
<br>Комментарии к реализации:
<br>Не нужно реализовывать конкретную отправку приза, достаточно имитации обработки и
изменения статуса приза.
<br>Если пункт вызывает затруднения, то его можно частично или полностью пропустить.
<br>Главное подход к решению, а не рабочий вариант.
<br>Желательно отразить прогресс решения в истории Git репозитория.
<br>-- minimal --
<br>1. Нужно предоставть коротокое описание решения для коллеги не-программиста или
менеджера (например UML диаграммы, структура БД, мокапы интерфейса и т.п.). Можно
и ручкой на листе.
<br>2. Нужно предоставить прототип в PHP 5.6 или 7 без использования фреймворков и
сторонних библиотек для анализа коллегами программистами. Не обязательно
использовать БД, данные можно хранить как угодно, например, в файле на сервере.
<br>3. Нужно добавить HTML разметку, CSS стили и JS скрипт для получения приза без
перезагрузки страницы что бы показать прототип заказчику.
<br>
      <br><hr>
      <br>-- advanced --
<br>4. Реализация с помощью фреймворка (можно любой, но лучше Yii или Yii2),
использованием БД.
<br>5. Нужно добавить консольную команду которая будет отправлять денежные призы на
счета пользователей, которые еще не были отправлены пачкаим по N штук.
6. Добавить юнит-тест конвертирования денежного приза в баллы лояльности.

    </div>
</div>
