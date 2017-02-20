<?php 
/*Домашнее задание к лекции 1.3 «Строки, массивы и объекты» 

Жестокое обращение с животными 

1. Составить массив, ключами в котором будут названия континентов (на английском - Africa), значениями — массивы из латинских названий зверей (например, Mammuthus columbi – можно найти в карточке
статистики о животном справа). Найдите различных зверей и составьте массив так, чтобы для ключа Africa у вас значением был бы массив из зверей, там обитавших или обитающих. Выберите только один континент
для каждого животного. Пусть у вас получится 10-15 зверей. 

2.Теперь найдите всех зверей, название которых состоит из двух слов. Составьте из них новый массив.

3.Случайно перемешайте между собой первые и вторые слова названий животных так, чтобы на выходе мы получили выдуманных, фантазийных животных. 
Название фантазийного животного должно начинаться с первого слова реального названия животного. Важно, чтобы каждый кусочек был использован и не повторялся более одного раза. 

* Ничего страшного, если в результате перемешивания иногда будут получаться реальные животные. Вывести этих животных на экран. 

Дополнительно: 

Сохраните названия регионов, к которым относятся ваши звери. Принадлежность определяйте по изначальной принаждлежности первого кусочка названия животного.
Пусть названия регионов выводятся заголовками <h2>, а под ними – относящиеся к этому региону животные. 
Между животными выводите запятые. В конце не должно быть висящих запятых, неуместных по правилам пунктуации.*/


// Задаем массив

$animalsWorld = array('Africa' => array('Loxodonta africana', // Африканский слон
	                                    'Panthera leo', // Африканский лев
										'Rhinocerotidae', // Носорог
					       				),
			      'Australia' => array('Macropus', // Кенгуру
						   				'Phascolarctos cinereus', // Коала
						   				'Canis Iupus dingo', // Собака динго
							           ),

			      'Asia' => array('Uncia uncia', // Барс снежный
					      			'Saiga tatarica', // Сайгак
					    			'Pongo', // Орангутан
								),

			      'Antarctida' => array('Aptenodytes forsteri', // Императорский пингвин
			                            'Hydrurga leptonyx', // Морской леопард
			                            'Mirounga', // Морской слон
						   				),
			      'Europe' => array('Canis Iupus', // Волк
									'Mustala  erminea', // Горностай
									'Ursus arctos', // Бурый медведь
					       			),
			      'South America' => array('Panthera onca', // Ягуар
						       				'Puma concorol', // Пума
						       				'Lama glama', // Лама
						       				),
			      'North America' => array('Gulo gulo', // Росомаха
						       				'Ursus Arctoc horibilis', // Гризли
						       				'Procyon', // Енот
		                                      ));
							
//Проверяю содержимое массива

	/*echo "<pre>"; 
	echo var_dump($animalsWorld);
	echo "</pre>"*/

//Выводим на экран массив с животными

	/*echo "<H2>All animals</H2>";
                
	foreach ($animalsWorld as $continent => $type){
		
		echo "<H2>".$continent."</H2>";

		foreach ($type as $animal){
		  
		   echo "<p>".$animal."</p>";
		  }
	}*/

//Добавляем новый массив с животными

	
	$animalsWorldWithTwo = array();
    /*cho "<pre>"; 
	echo var_dump($animalsWorldWithTwo);
	echo "</pre>"*/
        
//Выбираем всех зверей, названия которых состоят из 2-х слов
	
	foreach ($animalsWorld as $continent => $type) {
		
		foreach ($type as $animal)
		  {
			 $count = count(explode(" ", $animal));
			  if ($count == 2) {
                          $animalsWorldWithTwo[] = $animal;
			}
		  }
	}
        
//Проверяем значения массива $animalsWorldWithTwo 
	echo "<pre>";
    echo var_dump($animalsWorldWithTwo);
	echo "</pre>";

        
//Циклически выбираем из полученного массива значения, после чего складываем значения в единый массив.
        $OverMassive = array();
        $arrayall = array();
        $array_first_word = array();
        $array_second_word = array();
        for ($i = 0; $i < count($animalsWorldWithTwo); $i++) {

        	$arrayall = explode(" ", $animalsWorldWithTwo[$i]);
           
        	$array_first_word[] = $array_first_word[0];

        	$array_second_word[] = $array_second_word[1];
           
        	shuffle($array3);
           
        	$OverMassive[] = $array_first_word[$i]." ".$array_second_word[$i];
           
}
       
              
             
		/*echo "<pre>";
        echo var_dump($overMassive);
       	echo "</pre>";*/
        
        	foreach ($OverMassive as $value) {
                echo $value."<br>";
}

 ?>