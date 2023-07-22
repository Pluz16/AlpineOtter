<template>
  <header class="app-header">
    <div class="logo" @click="goToHomePage">
      <img src="@/assets/logodef.jpg" alt="Logo" />
    </div>
    <div class="brand">
      <h1>Megan &amp; Co.</h1>
    </div>
    <div>
      <div class="accordion" id="headerAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#headerCollapse" :aria-expanded="isMenuOpen" aria-controls="headerCollapse" @click="toggleMenu" :class="{ 'collapsed': !isMenuOpen }">
              {{ isMenuOpen ? 'Chiudi il Menù' : 'Apri il Menù' }}
            </button>
          </h2>
          <div id="headerCollapse" class="accordion-collapse collapse" :class="{ 'show': isMenuOpen }" data-bs-parent="#headerAccordion">
            <div class="accordion-body">
              <ul class="responsive-list">
                <li><router-link to="/allevamento" class="list-link">Allevamento</router-link></li>
                <li><router-link to="/pensione" class="list-link">Pensione</router-link></li>
                <li><router-link to="/blog" class="list-link">Blog</router-link></li>
                <li><router-link to="/chi-siamo" class="list-link">Chi siamo</router-link></li>
                <li><router-link to="/contattaci" class="list-link">Contattaci</router-link></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'AppHeader',
  data() {
    return {
      isMenuOpen: false,
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
    goToHomePage() {
      this.$router.push('/'); // Indirizzamento alla homepage
    },
  },
};
</script>

<style scoped>
.app-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  cursor: pointer;
}

.logo {
  font-weight: bold;
  font-size: 24px;
}

.logo img {
  max-width: 100px;
}

.brand {
  font-size: 20px;
}

.accordion-item {
  background-color: #3FA273;
}

.accordion-button {
  font-weight: bold;
  background-color: #ffe4c4;
}

.list-link {
  color: #FFF;
  font-weight: bold;
}

.list-link:hover {
  color: #F0A6A6;
}

@media (max-width: 767px) {
  .app-header {
    flex-direction: column;
    align-items: center;
  }

  .logo {
    margin-bottom: 10px;
  }

  .accordion-body {
    margin-top: 10px;
  }

  .accordion-body ul {
    flex-direction: column;
    align-items: center;
  }

  .accordion-body li {
    margin: 5px 0;
  }
}
</style>
