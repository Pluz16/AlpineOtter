<template>
    <div class="contattaci-page">
      <div class="contattaci-info">
        <h2>Contattaci</h2>
        <p>Indirizzo: Settimo Vittone (TO) Via Montiglie 16</p>
        <p>IVA: 12427530014</p>
        <p>Tel: +39 3421032437</p>
        <p><a href="https://www.facebook.com/alpineotter">https://www.facebook.com/alpineotter</a></p>
      </div>
  
      <div class="contattaci-form">
        <h3>Richiedi una chiamata o un colloquio dal vivo</h3>
        <form @submit.prevent="sendMessage">
          <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" v-model="name" required>
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="email" id="email" v-model="email" required>
          </div>
          <div>
            <label for="message">Messaggio:</label>
            <textarea id="message" v-model="message" required></textarea>
          </div>
          <div>
            <label for="type">Seleziona:</label>
            <select id="type" v-model="selectedType">
              <option value="allevamento">Allevamento</option>
              <option value="pensione">Pensione</option>
            </select>
          </div>
          <button type="submit">Invia</button>
        </form>
      </div>
    </div>
  </template>
  

  <script>
  export default {
    data() {
      return {
        name: "",
        email: "",
        message: "",
        selectedType: "allevamento"
      };
    },
    methods: {
      sendMessage() {
        // Inserisci qui la logica per inviare il messaggio
        console.log("Nome:", this.name);
        console.log("Email:", this.email);
        console.log("Messaggio:", this.message);
        console.log("Tipo selezionato:", this.selectedType);
      }
    }
  };
  </script>
  

<style scoped>
.contattaci-page {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

h2 {
  font-size: 18px;
  font-weight: bold;
  margin-top: 20px;
  margin-bottom: 10px;
}

label {
  font-weight: bold;
  display: block;
  margin-top: 10px;
}

input,
textarea,
select {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: white;
  cursor: pointer;
  border: none;
  border-radius: 4px;
  padding: 10px;
  font-weight: bold;
}

a {
  color: #205ea6;
  text-decoration: none;
}

p {
  margin-top: 10px;
}

p.error {
  color: red;
}



</style>