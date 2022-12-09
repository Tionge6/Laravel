import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  
  {
    path: './components/AboutUs',
    name: 'AboutUs',
    component: () => import('./components/AboutUs')
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router