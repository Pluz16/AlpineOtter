<template>
    <div class="allevamento">
      <section class="hero">
        <h1 class="title">Benvenuti all'Allevamento</h1>
        <p class="subtitle">Scopri i nostri bellissimi cani e prenota un appuntamento</p>
        <button class="btn-appointment">Prenota un appuntamento</button>
      </section>
  
      <section class="dogs-section">
        <h2 class="section-title">I nostri cani</h2>
        <div class="dogs-container">
          <div v-for="dog in dogs" :key="dog.id" class="dog-card">
            <div class="dog-image">
              <img :src="dog.photo" :alt="dog.name" />
            </div>
            <h3 class="dog-name">{{ dog.name }}</h3>
            <p class="dog-description">{{ dog.description }}</p>
          </div>
        </div>
      </section>
  
      <section class="carousel-section">
        <h2 class="section-title">Galleria</h2>
        <div class="carousel">
          <!-- Inserisci qui il tuo carosello -->
        </div>
      </section>
  
      <section class="litters-section">
        <h2 class="section-title">Cucciolate e Comunicazioni</h2>
        <!-- Inserisci qui le cucciolate e le comunicazioni -->
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
            // photo: require('@/assets/mira.jpg'),
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
  
  .dogs-section {
    margin-bottom: 40px;
  }
  
  .section-title {
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .dogs-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
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
  
  /* .litters-section { */
    /* Aggiungi lo stile per la sezione delle cucciolate e delle comunicazioni */
  /* } */
  </style>
  