
document.querySelectorAll('.btn').forEach(function(button) {
    button.addEventListener('click', function() {
      var buttonId = this.getAttribute('data-button-id');
      
      // Obtiene el contador actual del botón desde el almacenamiento local
      var counter = localStorage.getItem('counter_' + buttonId);
      if (counter === null) {
        // Si no existe un contador para el botón, se inicializa en 0
        counter = 0;
      } else {
        // Si el contador existe, se convierte a un número
        counter = parseInt(counter);
      }
  
      // Incrementa el contador en 1
      counter++;
  
      // Guarda el nuevo valor del contador en el almacenamiento local
      localStorage.setItem('counter_' + buttonId, counter);
  
      // Actualiza el contador en la página
      var counterElement = document.getElementById('blue_btn' + buttonId + '_counter');
      if (counterElement) {
        counterElement.textContent = counter;
      }
    });
  });