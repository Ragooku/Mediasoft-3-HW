<!doctype html>
<html lang = "ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница регистрации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">

    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form  action="form.php" method="post">

                <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"><br>

                <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите вашу фамилию"><br>

                <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>



                <button  type ="submit" >Завершить регистрацию</button>
            </form>

        </div>

        <div class="col">

            </form>
        </div>


    </div>
</div>

</body>
</html>