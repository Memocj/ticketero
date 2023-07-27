<!DOCTYPE html>
<html>
<head>
  <meta charset="Utf-8">
  <title>Caja Atención al Cliente</title>
  <link rel="stylesheet" href="../../css/caja_registro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="../../img/Logo-UPDS-HD.png" class="logo" alt="">
      <h1>CAJA 2</h1>
      <button class="close__sesion-button" id="btn_close">cerrar sesion
        <i class="fa-solid fa-right-from-bracket"></i>
      </button>
    </div>
    <div class="content">
      <div class="section">
        <div class="section-header">EN CAJA</div>
        <div class="number">CA-0002</div>
      </div>
      <div class="section">
        <div class="section-header">EN ATENCION PREFERENCIAL</div>
        <div class="number">APC-0040</div>
      </div>
      <div class="section">
        <div class="section-header">SIGUIENTE CAJA</div>
        <div class="number" id="next-caja">CA-0003</div>
      </div>
      <div class="section">
        <div class="section-header">SIGUIENTE ATENCION PREFERENCIAL</div>
        <div class="number">APC-0001</div>
      </div>
    </div>
    <div class="sub-container">
      <div class="section">
        <div class="section-header numeros_a">NUMEROS ATENDIDOS</div>
        <div class="row-container">
          <div class="na">-numero-</div>
          <div class="na">-numero-</div>
          <div class="na">-numero-</div>
          <div class="na">-numero-</div>
        </div>
      </div>
      <div class="section">
        <div class="section-header">LLAMAR CAJA</div>
        <div class="row-container-sub">
            <div>
              <button class="red_btn" id="btn_red1">siguiente 
                <i class="fa-solid fa-right-long"></i>
              </button>
            </div>
          <div>
            <button class="button" id="blue_btn1">volver a llamar
              <i class="fa-solid fa-rotate-left"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="section-header">LLAMAR ATENCION PREFERENCIAL</div>
        <div class="row-container-sub">
            <div>
              <button class="red_btn" id="btn_red2">siguiente
                <i class="fa-solid fa-right-long"></i>
              </button>
            </div>
          <div>
            <button class="button" id="blue_btn2">volver a llamar
              <i class="fa-solid fa-rotate-left"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../js/btn_caja-registro.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>