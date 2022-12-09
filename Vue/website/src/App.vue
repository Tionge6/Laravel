<template>
  <v-app >
    

    <Header/>
    
    
    <v-main>
      <HeroComponent/>
      <AboutUs/>
      <Portfolio/>
      <Project/>
      <Gallery/>
      <ContactUs/>
      <Footer/>
      
    </v-main>
    
    
  </v-app>
</template>

<script>


import HeroComponent from './components/HeroComponent.vue'
import AboutUs from './components/AboutUs'
import Portfolio from './components/Portfolio'
import Project from './components/Project'
import Gallery from './components/Gallery'
import ContactUs from './components/ContactUs'
import Footer from './components/Footer'
import Header from './components/Header'
export default {
  components: {
    HeroComponent, Footer, AboutUs, Portfolio, Project, Gallery, ContactUs, Header

  },
  name: 'App',
};
</script>
