<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Меню</a></li>
        <li class="dib item"><a href="#" class="active">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#">Платные опции</a></li>
        <li class="dib item"><a href="#">Статистика</a></li>
    </ul>

    <div class="tabs profile_tabs">
        <ul class="dib">
            <li class="dib"><a href="#">Акции</a></li>
            <li class="dib active"><a href="#">События</a></li>
            <li class="dib"><a href="#">Новости</a></li>
        </ul>
    </div>
    <div class="cols admin_action_list">
        <div class="col-2 dib">



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step1"><i class="color_middle date dib">25.06.2016</i>Концерт Михаила Шуфутинского</a>
                <form class="step edit_article" id="step1">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_1_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_1_1">
                            <label><input type="radio" name="action1" checked>Концерт</label>
                            <label><input type="radio" name="action1" >Мастер-класс</label>
                            <label><input type="radio" name="action1" >Трансляция</label>
                            <label><input type="radio" name="action1" >Вечеринка</label>
                        </div>
                    </div>
                    <div class="date_holder">
                        <input type="text" class="dib" placeholder="Число">
                        <input type="text" class="dib" placeholder="Месяц">
                        <input type="text" class="dib" placeholder="Год">
                        <input type="text" class="dib" placeholder="Время">
                    </div>
                    <input type="text" value="Концерт Михаила Шуфутинского">
                    <textarea>Концерт Михаила Шуфутинского</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2"><i class="color_middle date dib">07.06.2016</i>Спортивные онлайн трансляции</a>
                <form class="step edit_article" id="step2">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_2_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                        <div class="step open" id="add_step_2_1">
                            <label><input type="radio" name="action2" checked>Концерт</label>
                            <label><input type="radio" name="action2" >Мастер-класс</label>
                            <label><input type="radio" name="action2" >Трансляция</label>
                            <label><input type="radio" name="action2" >Вечеринка</label>
                        </div>
                    </div>
                    <div class="date_holder">
                        <input type="text" class="dib" placeholder="Число">
                        <input type="text" class="dib" placeholder="Месяц">
                        <input type="text" class="dib" placeholder="Год">
                        <input type="text" class="dib" placeholder="Время">
                    </div>
                    <input type="text" value="Спортивные онлайн трансляции">
                    <textarea>Спортивные онлайн трансляции</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step3"><i class="color_middle date dib">15.05.2016</i>Dj-сет Matt Duvalle</a>
                <form class="step edit_article" id="step3">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_3_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                        <div class="step open" id="add_step_3_1">
                            <label><input type="radio" name="action3" checked>Концерт</label>
                            <label><input type="radio" name="action3" >Мастер-класс</label>
                            <label><input type="radio" name="action3" >Трансляция</label>
                            <label><input type="radio" name="action3" >Вечеринка</label>
                        </div>
                    </div>
                    <div class="date_holder">
                        <input type="text" class="dib" placeholder="Число">
                        <input type="text" class="dib" placeholder="Месяц">
                        <input type="text" class="dib" placeholder="Год">
                        <input type="text" class="dib" placeholder="Время">
                    </div>
                    <input type="text" value="Dj-сет Matt Duvalle">
                    <textarea>Dj-сет Matt Duvalle</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step4"><i class="color_middle date dib">09.05.2016</i>Караоке-выходные</a>
                <form class="step edit_article" id="step4">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_4_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                        <div class="step open" id="add_step_4_1">
                            <label><input type="radio" name="action4" checked>Концерт</label>
                            <label><input type="radio" name="action4" >Мастер-класс</label>
                            <label><input type="radio" name="action4" >Трансляция</label>
                            <label><input type="radio" name="action4" >Вечеринка</label>
                        </div>
                    </div>
                    <div class="date_holder">
                        <input type="text" class="dib" placeholder="Число">
                        <input type="text" class="dib" placeholder="Месяц">
                        <input type="text" class="dib" placeholder="Год">
                        <input type="text" class="dib" placeholder="Время">
                    </div>
                    <input type="text" value="Караоке-выходные">
                    <textarea>Караоке-выходные</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step5"><i class="color_middle date dib">05.04.2016</i>Школа живописи</a>
                <form class="step edit_article" id="step5">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_5_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                        <div class="step open" id="add_step_5_1">
                            <label><input type="radio" name="action5" checked>Концерт</label>
                            <label><input type="radio" name="action5" >Мастер-класс</label>
                            <label><input type="radio" name="action5" >Трансляция</label>
                            <label><input type="radio" name="action5" >Вечеринка</label>
                        </div>
                    </div>
                    <input type="text" value="Школа живописи">
                    <textarea>Школа живописи</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>



            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step6"><i class="color_middle date dib">20.03.2016</i>Jeans Casual party</a>
                <form class="step edit_article" id="step6">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_6_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                        <div class="step open" id="add_step_6_1">
                            <label><input type="radio" name="action6" checked>Концерт</label>
                            <label><input type="radio" name="action6" >Мастер-класс</label>
                            <label><input type="radio" name="action6" >Трансляция</label>
                            <label><input type="radio" name="action6" >Вечеринка</label>
                        </div>
                    </div>
                    <input type="text" value="Jeans Casual party">
                    <textarea>Jeans Casual party</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>





            <a class="green_btn dib view_form_add_new_article" data-event="slidetoggle" data-id="#add_new_article_form">Добавить событие</a>

            <form id="add_new_article_form">
                <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                    <input type="file" id="title_img_article">
                </label>
                <div class="type">
                    <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_1">Тип акции *   <i class="color_middle">(Вечеринка)</i></a>
                    <div class="step open" id="add_step_1">
                        <label><input type="radio" name="action" >Концерт</label>
                        <label><input type="radio" name="action" >Мастер-класс</label>
                        <label><input type="radio" name="action" >Трансляция</label>
                        <label><input type="radio" name="action" >Вечеринка</label>
                    </div>
                </div>
                <div class="date_holder">
                    <input type="text" class="dib" placeholder="Число">
                    <input type="text" class="dib" placeholder="Месяц">
                    <input type="text" class="dib" placeholder="Год">
                    <input type="text" class="dib" placeholder="Время">
                </div>
                <input type="text" placeholder="Заголовок *" class="title_article">
                <textarea placeholder="Текст новости"></textarea>
                <input type="submit" class="green_btn dib" value="Опубликовать"><input type="submit" class="reset dib" value="Отменить">

            </form>

        </div>
    </div><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>