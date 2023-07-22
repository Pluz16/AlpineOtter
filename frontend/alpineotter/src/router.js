import { createRouter, createWebHistory } from 'vue-router';

import Allevamento from '@/views/Allevamento-Page.vue';
import HomePage from '@/components/HomePage/HomePage.vue'
import BlogPage from '@/views/Blog-Page.vue';

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
