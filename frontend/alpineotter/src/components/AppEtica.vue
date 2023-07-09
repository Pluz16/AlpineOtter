<template>
    <div class="app-etica">
      <h2 class="title">Come lavoriamo?</h2>
      <div class="image-container">
        <img src="@/assets/Love.jpg" alt="Immagine 1" class="image" />
        <div class="text-container">
          <p class="text">Alleviamo pochi esemplari che condividono con noi tempo e spazi e che fanno parte della nostra famiglia. Per questo motivo programmiamo un numero ridotto di cucciolate ogni anno, lavorando sui cuccioli ed essendo molto selettivi nella scelta delle famiglie a cui li affidiamo.</p>
          <p class="text">La nostra passione per gli animali affonda negli insegnamenti di nonni e genitori, che ci hanno consentito di vivere a contatto con la natura ed in particolare con cani di ogni tipo.</p>
        </div>
        <img src="@/assets/Magda.jpg" alt="Immagine 2" class="image" />
      </div>
    </div>
  </template>
  
  <style scoped>
  .app-etica {
    text-align: center;
    margin-top: 20px;
  }
  
  .title {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .image-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
  }
  
  .image {
    width: 50%;
    height: auto;
    object-fit: cover;
    margin: 10px;
  }
  
  .text-container {
    width: 100%;
    margin: 10px;
  }
  
  .text {
    font-size: 16px;
    margin-bottom: 10px;
  }
  
  @media (max-width: 767px) {
    .image img{
      /* width: 100%; */
      height: 100px;
      object-fit: cover;
    }
  
    .text {
      font-size: 14px;
    }
  }
  </style>
  