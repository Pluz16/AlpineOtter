<template style="font-family: 'Headland One', sans-serif;">
  <div id="app" class="app-container">
    <AppHeader />
    <FirstHero />
    <app-owns></app-owns>
    <router-view />
    <AppFooter />
  </div>
</template>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppFooter from '@/components/AppFooter.vue';
import FirstHero from '@/components/FirstHero.vue';
import AppOwns from './components/AppOwns.vue';


export default {
  name: 'App',
  components: {

    AppHeader,
    FirstHero,
    AppOwns,
    AppFooter,

  },
};
</script>

<style>
.app-container * {
  font-family: 'Headland One', sans-serif;
}

.app-container{
  background: linear-gradient(180deg, #75B96A 8.85%, rgba(178, 248, 214, 0.00) 100%);

}

</style>