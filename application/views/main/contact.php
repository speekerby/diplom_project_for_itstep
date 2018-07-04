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


<main>
    <div class="contact">
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
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.533094775206!2d31.0097298!3d52.4332572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d469aabd72c467%3A0x27832cb2fc436c4e!2z0JHQuNC30L3QtdGBLdGG0LXQvdGC0YAgItCf0YPRiNC60LjQvSDQn9C70LDQt9CwIg!5e0!3m2!1sru!2sby!4v1530208506205"
                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</main>


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