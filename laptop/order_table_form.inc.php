<form>
    <strong class="title"><img src="img/order_table.svg" class="dibm" alt="">Заказ столика</strong>
    <img src="img/cross.svg" alt="" class="close" data-event="hideall" data-id=".order_table_holder">
<!--    <input type="hidden" value="Скрытое поле с названием ресторана">-->
    <select id="count_people">
        <option>на 3 человека</option>
        <option>на 5 человек</option>
        <option>на 10 человек</option>
    </select>
    <input type="text" class="datepicker" value="25 сентября">
    <input type="text" placeholder="Имя, Фамилия">
    <input type="text" placeholder="+7 (---) --- -- --" class="phone">
    <textarea placeholder="комментарий, пожелание"></textarea>
    <input type="submit" value="Забронировать столик">
</form>