import { createRouter, createWebHistory } from 'vue-router';

import Allevamento from '@/views/Allevamento-Page.vue';
import HomePage from '@/components/HomePage/HomePage.vue'
import Pensione from '@/views/Pensione-Page.vue';
import ContattaciPage from '@/views/Contattaci-Page.vue'
import AboutUs from '@/views/AboutUs-Page.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: HomePage,
  },

  {
    path: '/allevamento',
    name: 'Allevamento',
    component: Allevamento,
  },

  {
    path: '/pensione',
    exact: true,
    component: Pensione, // Usa il componente "Pensione" per questa rotta
  },
  


  {
    path: '/contattaci',
    name: 'Contattaci',
    component: ContattaciPage,
  },

  {
    path: '/chi-siamo',
    name: 'Chi siamo',
    component: AboutUs,
  },

  { path: '/chi-siamo#ethics-section', 
  component: AboutUs },


];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
