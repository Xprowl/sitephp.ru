$(document).ready(function() {
 $(".slider").each(function () { // обрабатываем каждый слайдер
  var obj = $(this);
  $(obj).append("<div class='nav'></div>");
  $(obj).find("li").each(function () {
   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // добавляем блок навигации
   $(this).addClass("slider"+$(this).index());
  });
  $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
 });
});
function sliderJS (obj, sl) { // slider function
 var ul = $(sl).find("ul"); // находим блок
 var bl = $(sl).find("li.slider"+obj); // находим любой из элементов блока
 var step = $(bl).width(); // ширина объекта
 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
}
$(document).on("click", ".slider .nav span", function() { // slider click navigate
 var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
 $(sl).find("span").removeClass("on"); // убираем активный элемент
 $(this).addClass("on"); // делаем активным текущий
 var obj = $(this).attr("rel"); // узнаем его номер
 sliderJS(obj, sl); // слайдим
 return false;
});

    

let current_date = Date();
let conv_curr_date = new Date(current_date);
let delay_popup = 2000;
if(conv_curr_date.getDay() === 0)
{
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 1)
{
    document.getElementById("first_p_id").innerText = "Скидка 30% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: yaroslav";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 2)
{
    document.getElementById("first_p_id").innerText = "Скидка 45% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: petruha";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 3)
{
    document.getElementById("first_p_id").innerText = "Скидка 50% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: antoha";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 4)
{
    document.getElementById("first_p_id").innerText = "Скидка 15% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: abudabi";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 5)
{
    document.getElementById("first_p_id").innerText = "Скидка 35% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: abudabi";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
if(conv_curr_date.getDay() === 6)
{
    document.getElementById("first_p_id").innerText = "Скидка 20% при показе промокода.";
    document.getElementById("second_p_id").innerText = "Промо: abudabi";
    setTimeout(() => {
        document.getElementById('overlay').style.display='block';
    }, delay_popup);
}
