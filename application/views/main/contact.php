<!--<form action="/contact" method="post">-->
<!--    <label for="name">-->
<!--        <input type="text" placeholder="Имя" name="name">-->
<!--    </label>-->
<!--    <br>-->
<!--    <label for="e-mail">-->
<!--        <input type="text" placeholder="E-mail" name="e-mail">-->
<!--    </label>-->
<!--    <br>-->
<!--    <label for="text">-->
<!--        <textarea name="text" rows="5"></textarea>-->
<!--    </label>-->
<!--    <br>-->
<!--    <button type="submit">Отправить</button>-->
<!--</form>-->
<!---->
<!--<link href="/public/styles/bootstrap.css" rel="stylesheet">-->


<contact>
    <div class="container-contact">
        <div class="contacts">
            <h1>Контакты:</h1>
            <hr>
            <p>22 St. Black Road Raleigh, PA 34578</p>
            <span>Телефоны:</span>
            <p><a href="tel:+375 29 370 09 13">+375 29 370 09 13</a></p>
            <p><a href="tel:+375 25 370 09 13">+375 25 370 09 13</a></p>
            <p><a href="tel:+375 33 370 09 13">+375 33 370 09 13</a></p>
            <p>Opening Hours</p>
            <p> Monday – Friday: 9am-6pm</p>
            <p> Saturday: 10am-4pm</p>
            <p>Sunday: 10am-1pm</p>
        </div>
        <div class="form-contact">
            <h1>Свяжись с нами</h1>
            <hr>
            <form action="/contact" method="post">
                <p><input type="text" class="form-control" name="name" placeholder="Имя"></p>
                <p><input type="text" class="form-control" name="email" placeholder="E-mail"></p>
                <p><textarea rows="10" class="form-control" name="text" placeholder="Сообщение"></textarea></p>
                <button type="submit" class="btn-form" id="sendMessageButton">Отправить</button>
            </form>
        </div>
    </div>
</contact>


<!--<div class="container p-5">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-8 col-md-10 mx-auto ">-->
<!--            <form action="/contact" method="post">-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="text" class="form-control" name="name" placeholder="Имя"></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><input type="text" class="form-control" name="email" placeholder="E-mail"></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="control-group">-->
<!--                    <div class="form-group floating-label-form-group controls">-->
<!--                        <p><textarea rows="5" class="form-control" name="text" placeholder="Сообщение"></textarea></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <br>-->
<!--                <div id="success"></div>-->
<!--                <div class="form-group">-->
<!--                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Отправить</button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script src="/public/scripts/jquery.js"></script>
<script src="/public/js/form.js"></script>

<!--
    background-color: #f8f8f8;
    border: 0;
        border-radius: 4px;
padding: 15px 60% 15px 10px;

-->