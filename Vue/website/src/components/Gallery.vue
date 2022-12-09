<template>
<v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
                <h2 class="topic">Gallery</h2>
                <p class="see">You can find other interests in our gallery!!</p>
            </v-col>

            <v-col lg="4" v-for="project in 9" :key="project">
            <v-card
   
   class="mx-auto my-12"
   max-width="374"
 >
   

   <v-img
     height="250"
     src="./../assets/image.png"
   ></v-img>

   <v-card-title>Web Development</v-card-title>

   <v-card-text>
     

    
     <div>A guide to your expert web development.</div>
   </v-card-text>

   <v-divider class="mx-4"></v-divider>
   <v-card-actions>
       <v-btn color="success" rounded> View Details</v-btn>
       <v-spacer>
           
       </v-spacer>
   </v-card-actions>

   
 </v-card>
           </v-col>
        </v-row>
</v-container>        
</template>

<script>
export default{
    name: "Gallery"
}
</script>
<style>
h2.topic{
  font-size: 30px;
  font-weight: bold;
  font-family: cursive;
  color:rgb(68, 68, 68);
}
p.see{
  font-size: 19px;
  font-family: cursive;
  margin:32px 0px;
  color:#444444ba
}
</style>