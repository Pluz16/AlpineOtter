<template>
    <div class="home-page">
      <FirstHero />
      <AppOwns />
      <AppReception />
      <AppEtica />
      <AppSlider />
      <!-- Aggiungi altri componenti della homepage -->
    </div>
  </template>
  
  <script>
  import FirstHero from '@/components/HomePage/FirstHero.vue';
  import AppOwns from '@/components/HomePage/AppOwns.vue';
  import AppReception from '@/components/HomePage/AppReception.vue';
  import AppEtica from '@/components/HomePage/AppEtica.vue';
  import AppSlider from '@/components/HomePage/AppSlider.vue';
  
  export default {
    name: 'HomePage',
    components: {
      FirstHero,
      AppOwns,
      AppReception,
      AppSlider,
      AppEtica,
      // Aggiungi altri componenti della homepage
    },
  };
  </script>
  
  <style scoped>
  /* .home-page {
    /* Stili per la homepage */
  /* } */
  </style>
  