// Внутренние переменные
var canvas, ctx;
var clockRadius = 250;
var clockImage;

// Функции рисования:
function clear() { // Очистка поля рисования
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

function drawScene() { // Основная функция drawScene
    clear(); // Очищаем поле рисования

    // Получаем текущее время
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    hours = hours > 12 ? hours - 12 : hours;
    var hour = hours + minutes / 60;
    var minute = minutes + seconds / 60;

    // Сохраняем текущий контекст
    ctx.save();

    // Рисуем изображение часов (как фон)
    ctx.drawImage(clockImage, 0, 0, 500, 500);

    ctx.translate(canvas.width / 2, canvas.height / 2);
    ctx.beginPath();

    // Рисуем цифры
    ctx.font = '36px Arial';
    ctx.fillStyle = '#000';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    for (var n = 1; n <= 12; n++) {
        var theta = (n - 3) * (Math.PI * 2) / 12;
        var x = clockRadius * 0.7 * Math.cos(theta);
        var y = clockRadius * 0.7 * Math.sin(theta);
        ctx.fillText(n, x, y);
    }

    // Рисуем часовую стрелку
    ctx.save();
    var theta = (hour - 3) * 2 * Math.PI / 12;
    ctx.rotate(theta);
    ctx.beginPath();
    ctx.moveTo(-15, -5);
    ctx.lineTo(-15, 5);
    ctx.lineTo(clockRadius * 0.5, 1);
    ctx.lineTo(clockRadius * 0.5, -1);
    ctx.fill();
    ctx.restore();

    // Рисуем минутную стрелку
    ctx.save();
    var theta = (minute - 15) * 2 * Math.PI / 60;
    ctx.rotate(theta);
    ctx.beginPath();
    ctx.moveTo(-15, -4);
    ctx.lineTo(-15, 4);
    ctx.lineTo(clockRadius * 0.8, 1);
    ctx.lineTo(clockRadius * 0.8, -1);
    ctx.fill();
    ctx.restore();

    // Рисуем секундную стрелку
    ctx.save();
    var theta = (seconds - 15) * 2 * Math.PI / 60;
    ctx.rotate(theta);
    ctx.beginPath();
    ctx.moveTo(-15, -3);
    ctx.lineTo(-15, 3);
    ctx.lineTo(clockRadius * 0.9, 1);
    ctx.lineTo(clockRadius * 0.9, -1);
    ctx.fillStyle = '#0f0';
    ctx.fill();
    ctx.restore();

    ctx.restore();
}

// Инициализация
$(function(){
    canvas = document.getElementById('canvas');
    ctx = canvas.getContext('2d');

    // var width = canvas.width;
    // var height = canvas.height;

clockImage = new Image();
clockImage.src = '/clock/images/cface.png';

    setInterval(drawScene, 1000); // Циклическое выполнение функции drawScene
});