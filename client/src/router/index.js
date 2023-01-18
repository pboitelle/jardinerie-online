import { createRouter, createWebHistory } from 'vue-router'

import LoginView from '../views/LoginView.vue'
import RegisterView from '../views/RegisterView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
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
