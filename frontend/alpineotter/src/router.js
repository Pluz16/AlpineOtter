import { createRouter, createWebHistory } from 'vue-router';

import Allevamento from '@/views/Allevamento-Page.vue';
import HomePage from '@/components/HomePage/HomePage.vue'

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
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
