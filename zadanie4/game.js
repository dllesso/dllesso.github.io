//холст
var canvas = document.getElementById("game");
var context = canvas.getContext("2d");
// задаем фон
var fonimg = new Image();
fonimg.src = 'fon.jpg';
//варианты хода
var glaz = new Image();//задаем переменную с вариантами ходов
glaz.src = 'glaz.png';
//задаем две переменные необходимые для привязки координат мыши к клеткам доски
var globX;
var globY;
/*реализация функции присвоения переменным mouse_x и mouse_у
значений х и у курсора мыши*/ 
ns4 = (document.layers)? true:false
ie4 = (document.all)? true:false

function init() {
    if (ns4) {document.captureEvents(Event.MOUSEMOVE);}
    document.onmousemove=mousemove;
}
function mousemove(event) {
    var mouse_x = y = 0;
    if (document.attachEvent != null) {
        mouse_x= globX = window.event.clientX;
        mouse_y = globY = window.event.clientY;
    } else if (!document.attachEvent && document.addEventListener) {
        mouse_x = globX = event.clientX;
        mouse_y = globY = event.clientY;
    }
    status="x = " + mouse_x + ", y = " + mouse_y;
   

	
	}
init()


var glazXY={x:300, y:300};
//нажатие кнопки мыши
//отображение вариантов ходов и перезагрузка стр через 1,5 сек
canvas.onclick = function(){
	render1();
	setInterval(function() {
 location.reload();
}, 1500);
}

//загрузка изображения шахматной доски
fonimg.onload = function(){ 
render();
}



function render() {                //-->вывод изображеия
context.drawImage(fonimg, 0, 0, 800, 800);//первая команда, которая рисует фон в координатах 0 0 800 на 800
}	

function render1() {                //-->вывод изображеия с вариантами ходов

//привязка координат курсора мыши к конкретной клетке шахматной доски
glazXY.x = 100*((globX*0.01).toFixed()-1)-200;
glazXY.y = 100*((globY*0.01).toFixed()-1)-200;
context.drawImage(glaz, glazXY.x, glazXY.y, 500, 500);
}

