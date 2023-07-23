import { createRouter, createWebHistory } from 'vue-router';

import Allevamento from '@/views/Allevamento-Page.vue';
import HomePage from '@/components/HomePage/HomePage.vue'
import BlogPage from '@/views/Blog-Page.vue';
import Pensione from '@/views/Pensione-Page.vue';

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
    path: '/blog',
    name: 'Blog',
    component: BlogPage,
  },


];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
