<template>
  <div id="app" class="app-container">
    <AppHeader />
    <div class="content">
      <FirstHero />
      <app-owns></app-owns>
      <AppReception />
      <router-view />
    </div>
    <AppFooter />
  </div>
</template>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppFooter from '@/components/AppFooter.vue';
import FirstHero from '@/components/FirstHero.vue';
import AppOwns from './components/AppOwns.vue';
import AppReception from './components/AppReception.vue';

export default {
  name: 'App',
  components: {
    AppHeader,
    FirstHero,
    AppOwns,
    AppFooter,
    AppReception,
  },
};
</script>

<style scoped>
.app-container {
  font-family: 'Headland One', sans-serif;
  background: linear-gradient(180deg, #75B96A 8.85%, rgba(178, 248, 214, 0.00) 100%);
}

.content {
  padding: 20px;
  margin: 0 auto;
  max-width: 1200px;
}

@media (max-width: 768px) {
  .content {
    padding: 10px;
  }
}
</style>
