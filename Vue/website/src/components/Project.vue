<template>
<v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
                <h2 class="topic">Project</h2>
                <p class="see">Practice projects can be found in this section. Take up a challenge and test your skills.Timed projects are also available for advanced skills</p>
            </v-col>
            
           <v-col lg="4" v-for="project in 3" :key="project">
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
           <v-rating
               :value="4.5"
               color="amber"
               dense
               half-increments
               readonly
               size="14"

           ></v-rating>
       </v-spacer>
   </v-card-actions>

   
 </v-card>
           </v-col>
        </v-row>
</v-container>        
</template>

<script>
    export default{
        name: 'Project',
        
    }
</script>

<style scoped>
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