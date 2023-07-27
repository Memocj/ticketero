function changeColorOnClick(button) {
    button.addEventListener('click', function() {
      button.style.backgroundColor = 'var(--dark-blue)';
      setTimeout(function() {
        button.style.backgroundColor = 'var(--primary-color)';
      }, 70);
    });
  }
  
  const blue_btn1 = document.getElementById('blue_btn1');
  changeColorOnClick(blue_btn1);
  
  const blue_btn2 = document.getElementById('blue_btn2');
  changeColorOnClick(blue_btn2);
  
  const blue_btn3 = document.getElementById('blue_btn3');
  changeColorOnClick(blue_btn3);
  
  const blue_btn4 = document.getElementById('blue_btn4');
  changeColorOnClick(blue_btn4);
