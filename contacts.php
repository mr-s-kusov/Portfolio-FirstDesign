<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.S.K.-Contacts</title>
    <link rel="stylesheet" href="css/style-common.css">
    <link rel="stylesheet" href="css/style-contacts.css">
</head>
<body>
    <div class="container">
        
        <?php include 'menu.php';?> <!--File included the left menu -->

        <div class="info">
            <div class="contacts-contacts">
                <p class="t-topic f-t-topic">Контакты</p>
                <div class="cont">
                    <img src="img\icon-telegram.png" alt=""><p class="t-para f-t-para">@SKtelega</p>
                </div>
                <div class="cont">
                    <img src="img\icon-mail.png" alt=""><p class="t-para f-t-para">mr.s.kusov@yandex.ru</p>
                </div>
            </div>

            <div class="contacts-fbf">
                <p class="t-topic f-t-topic">Связаться со мной</p>
                <div class="forma">
                    <div class="form-at">
                        <div class="validate-input-at w-50" data-validate="Обязательное поле">
                            <input id="form_name" class="input-at" type="text" name="name-at" placeholder="Ваше имя" />
                            <span class="focus-input-at"></span>
                        </div>
                        <div class="validate-input-at w-50" data-validate="Обязательное поле">
                            <input id="form_tel" class="input-at" type="text" name="email-at" placeholder="Ваш телефон или email" />
                            <span class="focus-input-at"></span>
                        </div>
                        <div class="validate-input-at" data-validate="Обязательное поле">
                            <textarea id="form_text" class="input-at" name="message-at" placeholder="Ваше сообщение"></textarea>
                            <span class="focus-input-at"></span>
                        </div>
                        <input checked="checked" class="input-at" id="checkbox-at" type="checkbox" name="checkbox-at" onchange="document.getElementById('submit-at').disabled = !this.checked;" />
                        <label for="checkbox-at">
                            Настоящим подтверждаю, что я согласен на обработку персональных данных
                        </label> 
                        <input type="hidden" name="subject-at" value="Тема формы">
                        <button id="submit_at" class="form-at-btn">Отправить</button>
                    </div>
                    <div class="result-at"></div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="scripts\script-contacts.js"></script>

</body>
</html>