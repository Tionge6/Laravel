<template>
<v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
                <h2 class="subheader">Contact Us</h2>
                <p class="see"> Send us a message or find us physically through the map below put to guide you.</p>
            </v-col>
            <v-col lg="6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122864.83056863616!2d34.96072504359183!3d-15.776197299208956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d84513cbc0005f%3A0x236358dae4d811e6!2sBlantyre!5e0!3m2!1sen!2smw!4v1669798559265!5m2!1sen!2smw" width="100%" height="100%" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </v-col>
            <v-col lg="6">
                <v-form ref="form"
                    
  >
    <v-text-field
      v-model="contactInfo.name"
      :counter="10"
      label="Name"
      required
    ></v-text-field>

    <v-text-field
      v-model="contactInfo.email"
      label="E-mail"
      required
    ></v-text-field>
    <v-textarea 
    v-model="contactInfo.message"
    label="Message" 
    required>
    
    </v-textarea>

    

    <v-btn
      
      color="success"
      class="mr-4"
      
    >
      send
    </v-btn>

  </v-form>  

            </v-col>
        </v-row>
</v-container>


</template>

<script>
    export default{
        name: "ContactUs",
        data(){
            return{
                contactInfo:{}
            }
        }
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

</style>