

/*
Авторизация
 */

$('.login-btn').click(function (e) {

    console.log(123);
    e.preventDefault()

    $('input').removeClass( 'error');

    let login = $('input[ name= "login"]').val(),
         password = $('input[ name= "password"]').val()

       $.ajax({
           url: 'vendor/singin.php',
           type: 'POST',
           dataType: 'json',
           data: {
               login: login,
               password: password
           },

           success (data){
            console.log(data);
               if (data.status) {
                   document.location.href = '/profile.php';
               } else {
                   if (data.type === 1 ) {
                    data.fields.forEach(function (field) {
                        console.log (field);


                    $('input[ name=' +field+']').addClass('error');
                    })

                   }


                   $(".msg").removeClass('none').text(data.message);
               }


               //JSON
           }

       });
});

  /*
  Получение аватарки с поля
   */


let avatar = false;

$('input[name="avatar"]').change(function (e){
    console.log(123);
    avatar = e.target.files[0];
    console.log(avatar);
});


/*
    Регистрация
 */

$('.register-btn').click(function (e) {

    e.preventDefault()

    $('input').removeClass( 'error');

    let login = $('input[ name= "login"]').val(),
        password = $('input[ name= "password"]').val()
        full_name = $('input[ name= "full_name"]').val()
        email = $('input[ name= "email"]').val()
        password_confirm = $('input[ name= "password_confirm"]').val()


    let formData = new FormData ();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('full_name', full_name);
    formData.append('email', email);
    formData.append('password_confirm', password_confirm);
    formData.append('avatar', avatar);

    $.ajax({
        url: 'vendor/singup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData

        ,
        success (data){
            console.log(data);
            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1 ) {
                    data.fields.forEach(function (field) {
                        console.log (field);



                        $('input[ name=' +field+']').addClass('error');
                    })

                }


                $(".msg").removeClass('none').text(data.message);
            }


            //JSON
        }

    });
});