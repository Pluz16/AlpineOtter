<template>
  <section class="header-section">
  <div class="container-header">
    <h1 class="title">Benvenuti in Allevamento</h1>
    <p class="subtitle">L'eccellenza delle montagne nella selezione dei nostri cani</p>
  </div>
  <img src="@/assets/mountains.png" alt="">
</section>

<section class="card-section">
  <div class="container">
    <h2 class="section-title">I nostri principi</h2>
    <div class="card-row">
      <div class="card card-1">
        <h4 class="card-text">SALUTE</h4>
        <p class="card-text-description" >
            La salute è un aspetto fondamentale sul quale basiamo la nostra selezione.
            Tutti i nostri cani sono testati ufficialmente per displasia (FSA/CELEMASCHE),
            hanno il DNA depositato ed un ricco pannello di test genetici LABOKLIN.
            Tutti i risultati sono a disposizione dei clienti.
          </p>
      </div>
      <div class="card card-2">
        <h4 class="card-text">CARATTERE</h4>
        <p class="card-text-description" >
          Il carattere è un tratto distintivo del Labrador.
            Un labrador non sarebbe tale senza una innata volontà di compiacere
            e spiccati tratti di socievolezza ed attitudine al gioco.
            Questi punti ne rendono facile l'addestramento per attività specifiche.
        </p>

      </div>
      <div class="card card-3">
        <h4 class="card-text">FUNZIONALITÀ</h4>
        <p class="card-text-description" >
          La funzionalità è fondamentale per un Labrador.
            Prima di essere "bello" un labrador deve essere "funzionale".
            Struttura ossea di sostanza ma non eccessivamente pesante,
            i giusti angoli ed appiombi, un collo adatto a sorreggere prede.
            Coda grossa e di lunghezza media, che deve fungere da timone nella sua attività, preferita: IL NUOTO!
            Per non parlare di una andatura fluida e di un fiuto eccellente che lo devono aiutare a ritrovare e riportare al conduttore.
        </p>
      </div>
      <div class="card card-4">
        <h4 class="card-text">BELLEZZA</h4>
        <p class="card-text-description" >
          La bellezza è strettamente funzionale per noi.
            Nella nostra selezione privilegiamo cani non eccessivamente pesanti
            con l'obbiettivo di aderire perfettamente allo standard.
            Se qualche risultato lo abbiamo raggiunto, potete verificarlo noi curiosando fra le nostre foto.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="info-section">
    <div class="info-content">
      <h2 class="info-title">Hai bisogno di informazioni o prezzi?</h2>
      <button class="info-button">Clicca qui!</button>
    </div>
  </section>

<section class="intro-section">
  <div class="container">
    <div class="centered-content">
      <h4 class="sub-heading">Megan, la nostra prima labrador, ci ha insegnato molto su questa fantastica razza e ci ha permesso di conoscere molti esperti ed appassionati.</h4>
    </div>
  </div>
</section>


<section class="ethical-breeding-section">
    <div class="container-ethical">
      <div class="text-content">
        <h2 class="title">Ci basiamo su di un approccio etico all’allevamento:</h2>
        <p>
          Alleviamo pochi esemplari che condividono con noi tempo e spazi e che fanno parte della nostra famiglia
          SENZA ESSERE UMANIZZATI. Per questo motivo programmiamo un numero ridotto di cucciolate ogni anno, lavorando
          sui cuccioli ed essendo molto selettivi nella scelta delle famiglie a cui li affidiamo.
        </p>
      </div>
      <div class="image-content">
        <img src="@/assets/ethical_breeding.jpg" alt="Allevamento etico">
      </div>
    </div>
  </section>





</template>

<script>

</script>

<style scoped>

/* HEADER */
.header-section {
  padding: 40px 0;
  /* background-image: url(@/assets/mountains.png); */
  display: flex;
  justify-content: center;

}

.header-section img{
  max-width: 400px;

}

.container-header{
  display: inline-block;
  max-width: 100%;
  max-width: 100%; /* Imposta il contenitore a 100% della larghezza dello schermo */
  /* margin: 0 auto; */
  overflow: hidden; /* Nasconde il contenuto che supera la larghezza dello schermo */
}

.title {
  font-size: 36px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 10px;
  background-color: rgba(255, 228, 196, 0.634);
}

.subtitle {
  font-size: 18px;
  text-align: center;
  font-weight: 600;
  margin-bottom: 20px;
  background-color: rgba(255, 228, 196, 0.596);
}

@media (max-width: 768px) {
  .header-section img{
  display: none;
}
}

/* END- HEADER */

/* CAROUSEL */

.card-text {
  font-size: 1.5rem; /* Imposta una dimensione del font base */
  text-align: center;
  font-weight: bold;
  z-index: 1;
  white-space: nowrap; /* Impedisce al testo di andare a capo */
  overflow: hidden; /* Nasconde eventuali testi che superano la larghezza della card */
  text-overflow: ellipsis; /* Aggiunge puntini di sospensione quando il testo è nascosto */
}

.section-title {
  font-size: 1,5rem; /* Il testo avrà il 4% della larghezza del viewport come dimensione del font */
  text-align: center;
  margin-bottom: 20px;
}

.card-row {
  display: flex;
  justify-content: space-between;
  padding-bottom: 10px;
}

.card-row {
  position: relative; /* Aggiungi questa proprietà per consentire il posizionamento assoluto della descrizione */
}
.card {
  flex: 0 0 25%;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  cursor: pointer;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}





.card-text:hover{
  display: none;
}

.card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 10px;
  background-color: rgba(255, 255, 255, 0.7);
}

.card:hover h4{
  display: none;
}

.card:hover p{
  display: flex;
  background-color: rgba(240, 248, 255, 0.574);
}

.card-text-description{
  display: none;
  font-size: 11px;
  text-align: center;
  color: #000000;
  font-weight: 900;
  max-width: fit-content;
}

.card-text-description:hover{
  display: flex;
}


.card-text-description {
  /* Resto dello stile per la descrizione */
  display: none;
  font-size: 11px;
  text-align: center;
  color: #000000;
  font-weight: 900;
  position: absolute;
  top: 50%; /* Posiziona il paragrafo al centro della card */
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%; /* Imposta la larghezza della descrizione al 100% del container */
  background-color: rgba(240, 248, 255, 0.574);
  padding: 10px;
  border-radius: 5px;
  white-space: normal; /* Permette al testo di andare a capo */
}

.card:hover .card-text {
  display: none; /* Nascondi il testo della card al passaggio del mouse */
}

.card:hover .card-text-description {
  display: flex; /* Mostra il paragrafo al passaggio del mouse */
  position: absolute;
  top: 50%; /* Posiziona il paragrafo al centro della card */
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(240, 248, 255, 0.574);
  padding: 10px;
  border-radius: 5px;
  padding: 10 10 10 10;
}

.card-row {
  position: relative; /* Aggiungi questa proprietà per consentire il posizionamento assoluto della descrizione */
}

.card-1 {
  background-image: url('@/assets/cucciolo.jpg');
}

.card-2 {
  background-image: url('@/assets/PuppyWebby_head.jpg');
}

.card-3 {
  background-image: url('@/assets/history.jpg');
}

.card-4 {
  background-image: url('@/assets/Expo_Cuba_Head.jpg');
}

@media (max-width: 768px) {

  .card {
    max-width: 250px; /* Riduci la larghezza massima della card su schermi più piccoli */
    height: 180px; /* Riduci l'altezza della card su schermi più piccoli */
  }

  .card-text {
    font-size: 15px; /* Riduci la dimensione del font su schermi più piccoli */
  }
}

@media (max-width: 576px) {
  .card {
    max-width: 200px; /* Riduci ancora di più la larghezza massima della card su schermi ancora più piccoli */
    height: 200px; /* Riduci ulteriormente l'altezza della card su schermi ancora più piccoli */
    writing-mode: vertical-lr;
    text-orientation: upright;
  }

  .card-text-description{
    writing-mode: horizontal-tb; /* Imposta il testo orizzontalmente */
    text-orientation: mixed; /* Imposta il testo orizzontalmente senza ruotare */
  }

  .card-text {
    font-size: 12px; /* Riduci ulteriormente la dimensione del font su schermi ancora più piccoli */
  }
}




/* END-CAROUSEL */

/* SECTION CIT MEG */

.intro-section {
  background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url("@/assets/logodef.jpg");
  background-size: cover;
  background-position: center;
  padding: 80px 0;
  text-align: center;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.centered-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.main-heading {
  font-size: 48px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #333;
}

.divider {
  width: 100px;
  height: 4px;
  background-color: #F0A6A6;
  margin-bottom: 30px;
}

.sub-heading {
  font-size: 24px;
  font-weight: normal;
  line-height: 1.6;
  max-width: 800px;
  margin: 0 auto;
  color: #333;
  padding: 0 20px;
}

/* Hover Animation */
.sub-heading {
  transition: transform 0.3s ease-in-out;
}

.sub-heading:hover {
  transform: scale(1.05);
}


/* END SECTION CIT MEG */

/* ethical-breeding-section */

.ethical-breeding-section {
  text-align: center;
  padding: 40px 20px;
}

.container-ethical {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.title {
  font-size: 24px;
  margin-bottom: 10px;
}

.text-content {
  max-width: 800px;
  margin-bottom: 20px;
}

.image-content {
  max-width: 800px;
}

.image-content img {
  max-width: 100%;
  height: 350px;
  border-radius: 5px;
}

/* ethical-breeding-section end */

/* INFO SECTION */

.info-section {
  text-align: center;
  padding: 40px;
}

.info-content {
  max-width: 600px;
  margin: 0 auto;
}

.info-title {
  font-size: 24px;
  margin-bottom: 20px;
}

.info-button {
  font-size: 20px;
  padding: 15px 40px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.info-button:hover {
  background-color: #0056b3;
}

/*  END INFO SECTION */



</style>
