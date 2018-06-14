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
<link href="/public/styles/bootstrap.css" rel="stylesheet">


<div class="container p-5">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto ">
            <form action="/contact" method="post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><input type="text" class="form-control" name="name" placeholder="Имя"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><input type="text" class="form-control" name="email" placeholder="E-mail"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><textarea rows="5" class="form-control" name="text" placeholder="Сообщение"></textarea></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/public/scripts/jquery.js"></script>
<script src="/public/js/form.js"></script>