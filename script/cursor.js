let customCursor = document.querySelector('.cursor');

document.addEventListener('mousemove', moveCursor);

function moveCursor(e){
    let x = e.clientX;
    let y = e.clientY;

    customCursor.style.left = `${x}px`;
    customCursor.style.top = `${y}px`;

    this.speed = 0.5;
}