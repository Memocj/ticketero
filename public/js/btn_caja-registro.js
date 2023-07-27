//-------------------------------------------boton rojo----------------------------------------------------------//
//cambia de color cuando se le da cick
const btn_red1 = document.getElementById('btn_red1');

btn_red1.addEventListener('click', function() {
  btn_red1.style.backgroundColor = 'var(--dark-red)';
  setTimeout(function() {
    btn_red1.style.backgroundColor = 'var(--color-red)';
  }, 80);
});


const btn_close = document.getElementById('btn_close');

btn_close.addEventListener('click', function() {
  btn_close.style.backgroundColor = 'var(--dark-red)';
  setTimeout(function() {
    btn_close.style.backgroundColor = 'var(--color-red)';
  }, 80);
});

const btn_red2 = document.getElementById('btn_red2');

btn_red2.addEventListener('click', function() {
  btn_red2.style.backgroundColor = 'var(--dark-red)';
  setTimeout(function() {
    btn_red2.style.backgroundColor = 'var(--color-red)';
  }, 80);
});
//-------------------------------------------boton azul---------------------------------------------------------//
//cambia de color cuando se le da cick
const blue_btn1 = document.getElementById('blue_btn1');

blue_btn1.addEventListener('click', function() {
  blue_btn1.style.backgroundColor = 'var(--dark-blue)';
  setTimeout(function() {
    blue_btn1.style.backgroundColor = 'var(--primary-color)';
  }, 80);
});

//cambia de color cuando se le da cick
const blue_btn2 = document.getElementById('blue_btn2');

blue_btn2.addEventListener('click', function() {
  blue_btn2.style.backgroundColor = 'var(--dark-blue)';
  setTimeout(function() {
    blue_btn2.style.backgroundColor = 'var(--primary-color)';
  }, 80);
});