$(document).ready(function () {



	$('.container').children('input:radio').change(function(){

		o = $('.container').children('input:checked').map(function() {return this.value;}).get();

 		if (o.length == 12){
        	$(".test_end").css("display","block")
        }

	})

	$('.test_end').click(function () {
		
        //Берем данные с input Элемента
        
        v = $('#questions').children("div").map(function() {return $(this).text();}).get();

        name = $('#name').val();
        

        o = $('.container').children('input:checked').map(function() {return this.value;}).get();
        






        
        if (o.length != 12){
        	alert("Вы ответили не на все вопросы");
        }else{
        	$.ajax({
        		url: 'test_proverka.php',
            type: 'POST', //метод запроса
            //Передаем введенные пользователем данные в PHP скрипт
            data: {v: v, o: o, name:name},
            //если PHP отработал верно
            success: function (xhr, data, textStatus) {
                // if (xhr == 'ok') { //Если логин введен верно
                //     window.location.href = "http://localhost";
                // }

                // else if (xhr == 'error') { //Если такого логина не существует
                //     alert('Неверно введенны данные');
                // }

                //При какой то ошибке
                alert(name+", Вы ответили правильно на "+xhr+" вопросов");

            },
            //В случае, если PHP скрипт отработал с ошибкой
            error: function (xhr, textStatus, errorObj) {
            	alert('Произошла критическая ошибка!');
            },


        });
        }

    });


});