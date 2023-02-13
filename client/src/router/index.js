import { createRouter, createWebHistory } from 'vue-router'

import LoginView from '../views/LoginView.vue'
import RegisterView from '../views/RegisterView.vue'
import GardenView from '../views/GardenView.vue'
import AchatCoinsView from '../views/AchatCoinsView.vue'
import MarketView from '../views/MarketView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'login',
      component: LoginView
    },
    {
      path: '/register',
      name: 'register',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: RegisterView
    },
    {
      path: '/blog',
      name: 'blog',
      component: () => import('../views/BlogView.vue')
    },
    {
      path: '/garden',
      name: 'garden',
      component: GardenView
    },
    {
      path: '/coins',
      name: 'coins',
      component: AchatCoinsView
    },
    {
      path: '/blog/:id',
      name: 'blog-post',
      component: () => import('../views/BlogPostView.vue')
    },
    {
      path: '/market',
      name: 'market',
      component: MarketView
    },
    // component sert à charger le composant associé à la route (vue) et le nom sert à l'appeler dans le code (router-link) et le path sert à l'appeler dans l'url

    // {
    //   path: '/account',
    //   component: () => import('../views/AccountView.vue'),
    //   beforeEnter: (to, from, next) => {
    //     fetch('http://localhost:9000/api/secret-route', {
    //       credentials: 'include'
    //     })
    //       .then((response) => {
    //         if (response.ok) {
    //           next()
    //         } else {
    //           next({ name: 'login' })
    //         }
    //       }
    //     )
    //   }
    // }
  ]
})

export default router
