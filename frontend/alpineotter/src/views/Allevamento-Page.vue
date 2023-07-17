<template>
  <div class="allevamento">
    <section class="hero text-center">
      <h1 class="title">Benvenuti in Allevamento</h1>
      <p class="subtitle">Scopri i nostri bellissimi cani</p>
      <button class="btn btn-appointment">Prenota un appuntamento</button>
    </section>

    <section class="labrador-origin">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="section-title">Le origini del Labrador</h2>
            <div class="image-container">
              <img src="@/assets/terranovamap.jpg" alt="Terranova Map" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-8">
            <div class="text">
              <p class="section-text">
                Il Labrador è una razza originaria della penisola di Terranova, in Canada. Ha origini comuni al più grosso cane di Terranova ed è relativamente recente perché è stata selezionata in Inghilterra a partire dal diciannovesimo secolo. Si deve ad alcuni nobili inglesi con la passione della caccia, in particolare del riporto in ambienti acquatici e climi rigidi, la principale connotazione delle caratteristiche di questo ausiliario.
              </p>
              <p class="section-text">
                Ma a me piace pensare alla leggenda che vede il Labrador, figlio di un incontro fra un cane e una lontra...
              </p>
              <div class="collapse" id="labradorText">
                <p class="section-text">
                  Sul web troverete molto materiale a riguardo, ma se potete e siete interessati all'approfondimento, vi consiglio i testi della scomparsa Mary Roslin Williams, colei che è universalmente riconosciuta come la più importante allevatrice della storia.
                </p>
                <p class="section-text">
                  Attualmente questa razza è riconosciuta come una delle più versatili: riporto, salvataggio, ricerca persone, ricerca stupefacenti ed esplosivi, guida per ciechi, ausilio per disabili, pet therapy... persino agility con cani di working line!
                </p>
                <p class="section-text">
                  È un'ottima compagnia in casa e nelle nostre passeggiate, ma pessimo guardiano! Il suo carattere affabile e la sua volontà di compiacere non lo rendono adatto a compiti di guardia e difesa.
                </p>
              </div>
              <a class="btn btn-secondary" data-toggle="collapse" href="#labradorText" role="button" aria-expanded="false" aria-controls="labradorText">
                Mostra di più
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="row-project">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="image">
              <div class="image-overlay">
                <img src="@/assets/history.jpg" alt="Labrador" class="img-fluid" />
                <p class="section-text">
                  I nostri progetti allevatoriali non hanno sempre lo stesso fine, ma si basano tutti su 4 principi:
                </p>
                <ol>
                  <li>SALUTE</li>
                  <li>CARATTERE</li>
                  <li>FUNZIONALITÀ</li>
                  <li>BELLEZZA</li>
                </ol>
                <p class="section-text">
                  Essendo per noi l’allevatore "il custode della razza", evitiamo accuratamente accoppiamenti che producano anomalie di pigmentazione (DUDLEY).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="dogs-section">
      <div class="container">
        <h2 class="section-title">I nostri cani</h2>
        <div class="row">
          <div v-for="dog in dogs" :key="dog.id" class="col-md-4">
            <div class="dog-card">
              <div class="dog-image">
                <img :src="dog.photo" :alt="dog.name" class="img-fluid rounded-circle" />
              </div>
              <h3 class="dog-name">{{ dog.name }}</h3>
              <p class="dog-description">{{ dog.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="carousel-section">
      <div class="container">
        <h2 class="section-title">Galleria</h2>
        <div class="carousel">
          <!-- Inserisci qui il tuo carosello -->
        </div>
      </div>
    </section>

    <section class="litters-section">
      <div class="container">
        <h2 class="section-title">Cucciolate e Comunicazioni</h2>
        <!-- Inserisci qui le cucciolate e le comunicazioni -->
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dogs: [
        {
          id: 1,
          name: 'Mira',
          photo: require('@/assets/Mira_head.jpg'),
          description: 'Mira è un cane dolce e affettuoso, adora giocare e fare lunghe passeggiate.',
        },
        // Aggiungi qui altre schede per i cani
      ],
    };
  },
};
</script>

<style scoped>
.allevamento {
  padding: 20px;
}

.hero {
  text-align: center;
  margin-bottom: 40px;
}

.title {
  font-size: 36px;
  margin-bottom: 10px;
}

.subtitle {
  font-size: 18px;
  margin-bottom: 20px;
}

.btn-appointment {
  background-color: #F0A6A6;
  color: #FFF;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 4px;
}

.labrador-origin .row {
  align-items: center;
}

.row-project{
  display: flex;
}
.section-title {
  font-size: 24px;
  margin-bottom: 20px;
}

.image-container {
  text-align: center;
}

.image-container img {
  max-width: 100%;
  height: auto;
}

.row-project {
  margin-top: 40px;
}

.image-overlay {
  position: relative;
}

.image-overlay::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
}

.image-overlay p,
.image-overlay ol {
  color: #FFF;
}

.dogs-section {
  margin-bottom: 40px;
}

.dog-card {
  background-color: #F0F0F0;
  padding: 20px;
  text-align: center;
  border-radius: 4px;
}

.dog-image img {
  max-width: 100%;
  height: auto;
  border-radius: 50%;
}

.dog-name {
  font-size: 18px;
  margin-top: 10px;
}

.dog-description {
  margin-top: 10px;
}

.carousel-section {
  margin-bottom: 40px;
}

.litters-section {
  margin-bottom: 40px;
}

.litters-section .section-title {
  margin-bottom: 20px;
}

.litter-card {
  background-color: #F0F0F0;
  padding: 20px;
  text-align: center;
  border-radius: 4px;
}

.litter-image img {
  max-width: 100%;
  height: auto;
  border-radius: 4px;
}

.litter-name {
  font-size: 18px;
  margin-top: 10px;
}

.litter-description {
  margin-top: 10px;
}

.communications-section {
  margin-bottom: 40px;
}

.communications-section .section-title {
  margin-bottom: 20px;
}

.communication-card {
  background-color: #F0F0F0;
  padding: 20px;
  text-align: center;
  border-radius: 4px;
}

.communication-image img {
  max-width: 100%;
  height: auto;
  border-radius: 4px;
}

.communication-title {
  font-size: 18px;
  margin-top: 10px;
}

.communication-description {
  margin-top: 10px;
}
</style>
