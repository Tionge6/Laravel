<template>
<v-container>
    <v-row>
        
        <v-col lg="6">
            <img width="100%" height="100%" src="./../assets/image.png" alt="">
        
        </v-col>
        <v-col>
           <h2 class="subheader">About Us</h2>
        <p class="desc">Coding Hub is a Malawian local club that offers you a chance to explore their coding skills whether it be starting from scratch or improving on existing skills. Some benefits include:</p>
        <v-list >
            <v-list-item>
                <v-icon color="success">mdi-check-all</v-icon>
                <p class="see"><v-list-item-subtitle> Expert help every step of the way</v-list-item-subtitle></p>
            
            </v-list-item>
            <v-list-item>
                <v-icon color="success">mdi-check-all</v-icon>
                <p class="see"><v-list-item-subtitle>Free Short but equiping courses</v-list-item-subtitle></p>
            
            </v-list-item>
            <v-list-item>
                <v-icon color="success">mdi-check-all</v-icon>
                <p class="see"><v-list-item-subtitle>Flexible and Friednly Environment</v-list-item-subtitle></p>
            
            </v-list-item>
        
            <v-list-item>
                <v-icon color="success">mdi-check-all</v-icon>
                <p classes="see"><v-list-item-subtitle>Certificates Offered Offered at the end of each course</v-list-item-subtitle></p>
            </v-list-item>
       
            <v-list-item>
                <v-icon color="success">mdi-check-all</v-icon>
                <p class="see"><v-list-item-subtitle>Exposure opportunities to a larger programming community</v-list-item-subtitle></p>
            </v-list-item>
           
        </v-list>
        
        </v-col>

        
    </v-row>
</v-container>

</template>

<script>
export default{
    name: 'AboutUs'
}
</script>

<style scoped>
h2.subheader{
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
p.desc{
    font-size: 19px;
    font-family: cursive;
    margin:32px 0px;
    color:#444444ba
}
</style>


