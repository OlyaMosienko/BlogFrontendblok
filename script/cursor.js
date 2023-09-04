//let customCursor = document.querySelector('.cursor');

//document.addEventListener('mousemove', moveCursor);
//cursor.style.boxShadow = '0 5px 15px rgba(18, 192, 221, 1)';

//function moveCursor(e){
    //let x = e.clientX;
    //let y = e.clientY;

    //customCursor.style.left = `${x}px`;
    //customCursor.style.top = `${y}px`;

    //this.speed = 0.5;
//}

//Создаем div элемент для кастомного курсора
var cursor = document.createElement("div");
cursor.className = "custom-cursor";
document.body.appendChild(cursor);

// Перемещаем кастомный курсор вместе с мышью
document.addEventListener("mousemove", function(event) {
  var x = event.clientX;
  var y = event.clientY;
  cursor.style.left = x + "px";
  cursor.style.top = y + "px";
  this.speed = 0.5;
});

// Скрытие стандартного курсора при наведении на элементы
var elementsWithCustomCursor = document.querySelectorAll(".custom-cursor-element");

elementsWithCustomCursor.forEach(function(element) {
  element.addEventListener("mouseenter", function() {
    cursor.style.display = "none";
  });
  
  element.addEventListener("mouseleave", function() {
    cursor.style.display = "block";
  });
});


// var box = document.getElementById('box');

// document.addEventListener('mousemove', function(event) {
//   var mouseX = event.clientX;
//   var mouseY = event.clientY;
  
//   var offsetX = (mouseX / window.innerWidth) * 20 - 10; // Определяем смещение по оси X в диапазоне от -10 до 10
//   var offsetY = (mouseY / window.innerHeight) * 20 - 10; // Определяем смещение по оси Y в диапазоне от -10 до 10
  
//   box.style.boxShadow = offsetX + 'px ' + offsetY + 'px 10px rgba(0, 0, 0, 0.5)';
// });