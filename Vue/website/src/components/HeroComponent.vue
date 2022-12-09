<template>
    
<v-container  class="pt-15">
    
<v-row>

<v-col lg="6">
    <h2 class="intro-text" >Welcome to the Coding Hub</h2>
    <p class="description">Make all your coding dreams come true by either joining us or learning from us.<br> Get motivated by other members and non-memebers who gained their skills with us by clicking the video link below.<br/>Click on Get Started to see some of the free short bur equiping courses we offer. </p>
    <v-btn color="success" class="white--text mr-10" rounded>Get Started</v-btn>
    <v-btn color="indigo" class="white--text" rounded >
         <v-icon>mdi-play-circle</v-icon>
        Watch Video </v-btn>
    

</v-col>
  <v-col lg="6">
    <img width="100%" src="./../assets/image4.png" alt="" rounded>
  </v-col>

</v-row>

</v-container>

</template>

<script>
export default{
    name: 'HeroComponent'
}
</script>

<style scoped>
h2.intro-text{
    font-size: 40px;
    font-weight: bold;
    font-family: cursive;
    color:rgb(68, 68, 68);
}
p.description{
    font-size: 19px;
    font-family: cursive;
    margin:32px 0px;
    color:#444444ba
}
</style>