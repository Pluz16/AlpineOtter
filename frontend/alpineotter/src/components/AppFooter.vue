<template>
  <footer class="app-footer">
    <div class="footer-left">
      <div class="useful-section">
        <div class="section-title">Sezioni utili</div>
        <div class="useful-links">
          <router-link to="/allevamento">-Allevamento Labrador Retriever</router-link>
          <router-link to="/cuccioli">-Cuccioli Labrador Retriever</router-link>
          <router-link to="/pensione">-Pensione e Villaggio Vacanze</router-link>
        </div>
      </div>
      <div class="horizontal-links">
        <router-link to="/blog">BLOG</router-link>
        <router-link to="/servizi">Servizi</router-link>
        <router-link to="/etica">Etica</router-link>
      </div>
    </div>
    <div class="footer-center">
      <h3 class="company-title">Megan & Co</h3>
      <p class="owner-name">di Manuel Punta</p>
      <p class="footer-info">
        Indirizzo: Settimo Vittone (TO) Via Montiglie 16<br />
        IVA: 12427530014<br />
        Tel: +39 3421032437<br />
        <a href="https://www.facebook.com/alpineotter">https://www.facebook.com/alpineotter</a>
      </p>
    </div>
    <div class="footer-right">
      <img src="../assets/enci.png" alt="ENCI" class="sponsor-image" />
      <img src="../assets/fci.png" alt="Sponsor Image 2" class="sponsor-image" />
    </div>
  </footer>
</template>

<style>

  .app-footer {
    color: #000;
    font-family: HeadlandOne;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    display: flex;
    flex-direction: row;
    background: #3FA273;
    height: 460px;
    align-items: center;
  }

  .footer-left {
    display: flex;
    width: 75%;
    flex-direction: column;
    padding-left: 25px;
    
  }

  .useful-section {
    display: flex;
    flex-direction: column;
    width: 75%;
  }

  .section-title {
    color: #000;
    font-size: 32px;
  }

  .useful-links {
    color: #000;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    
  }

  .horizontal-links {
    display: flex;
    color: #000;
    font-size: 24px;
  }

  .horizontal-links, router-link{
    padding-left: 10px;
    padding-top: 10px;
  }

  .footer-center {
    display: flex;
    width: 75%;
    flex-direction: column;
    /* align-items: flex-end; */
  }

  .company-title {
    display: flex;
    width: 100%;
    color: #000;
    font-size: 32px;
  }

  .owner-name {
    display: flex;
    width: 100%;
    color: #000;
    font-size: 20px;
  }

  .footer-info {
    display: flex;
    width: 100%;
    color: #000;
    font-size: 20px;
    flex-direction: column;
    
  }

  .footer-right {
    display: flex;
    width: 25%;
    flex-direction: column;
  }

  .sponsor-image {
    width: 150px;
    height: 106px;
    border-radius: 25px;
    margin-bottom: 10px;
    display: flex;
    padding-top: 5px;
  }
</style>

