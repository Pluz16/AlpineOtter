<template>
    <div class="pensione-container">
  <h2 class="pensione-title">Un Paradiso per i Vostri Amici a Quattro Zampe</h2>
  <div class="pensione-info">
    <div class="pensione-text">
      <h3>Chi Siamo - La Nostra Filosofia</h3>
      <p>
        Noi crediamo nell'eccellenza e nella qualità del servizio che offriamo.
        Per questo motivo, abbiamo scelto di mantenere un numero ridotto di ospiti,
        in modo da poterci dedicare completamente al loro benessere e garantire un'attenzione personalizzata a ognuno di loro.
      </p>
      <p>
        Ogni cane che arriva nella nostra pensione viene accolto e valutato con cura,
        affinché possiamo comprendere le sue esigenze e garantirgli un soggiorno felice e sereno.
      </p>
    </div>
    <div class="pensione-image">
      <!-- Inserisci qui l'immagine della pensione -->
      <img src="@/assets/struttura.jpg" alt="Pensione per cani" />
    </div>
  </div>
  <div class="pensione-location">
    <h3>Una Location Unica</h3>
    <p>
      La nostra pensione si trova in una posizione privilegiata, circondata da rigogliosi paesaggi verdi.
      Questa cornice idilliaca è perfetta per lunghe passeggiate e giochi all'aperto,
      offrendo ai nostri ospiti la possibilità di vivere esperienze uniche a stretto contatto con la natura.
    </p>
    <p>
      Inoltre, pur essendo immersi nella tranquillità della campagna,
      siamo comodamente vicini ai centri abitati, per garantire una facile accessibilità.
    </p>
  </div>
  <div class="pensione-health">
    <h3>La Salute dei Nostri Ospiti è una Priorità</h3>
    <p>
      Per garantire la salute e il benessere di tutti i nostri ospiti,
      ospitiamo esclusivamente cani in regola col percorso vaccinale e trattati con antiparassitari.
      La sicurezza e il comfort dei nostri amici a quattro zampe sono la nostra massima priorità.
    </p>
  </div>
  <div class="pensione-contact">
    <h3>Vieni a Trovarci!</h3>
    <p>
      Siamo situati in Via Montiglie, 18 a Settimo Vittone (TO) 10010.
      Se desideri scoprire di più sulla nostra pensione e prenotare un soggiorno per il tuo cane, contattaci o vieni a trovarci!
      Saremo felici di mostrarti il nostro ambiente e di conoscere il tuo amico peloso.
    </p>
  </div>
</div>


</template>


<style>

.pensione-container {
  max-width: 800px;
  margin: 0 auto;
}

.pensione-title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.pensione-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 40px;
}

.pensione-text {
  flex: 1;
}

.pensione-image {
  flex: 1;
  margin-left: 20px;
}

.pensione-image img {
  max-width: 100%;
  border-radius: 8px;
}

.pensione-location,
.pensione-health,
.pensione-contact {
  margin-bottom: 40px;
}

h3 {
  font-size: 20px;
  margin-bottom: 10px;
}


</style>