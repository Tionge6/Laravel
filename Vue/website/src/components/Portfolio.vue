<template>
    <v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
              <h2 class="subheader">Portfolio</h2>
                <p class="see">Below are a couple of types of skills that you can be attained through the hub.</p>
            </v-col>
            <v-col lg="12">
                <div class="text-center">
                    <v-chip @click="activePortfolio = 'webapp'" :color="activatePortfolio === 'webapp'? 'success':''" class="mx-5">web App</v-chip>
                    <v-chip @click="activePortfolio = 'mobileapp'" :color="activatePortfolio === 'mobileapp'? 'success':''" class="mx-5">Mobile App</v-chip>
                    <v-chip @click="activePortfolio = 'desktopapp'" :color="activatePortfolio === 'desktopapp'? 'success':''" class="mx-5">Desktop App</v-chip>
                </div>
            </v-col>
            <slot v-if="activePortfolio === 'webapp'">
                <v-col lg="3" v-for="(web,webindex) in webApps" :key="webindex">
                <v-card>
            <v-img
              src="./../assets/image2.png"
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="200px"
            >
              <v-card-title>{{web.title}}</v-card-title>
            </v-img>

            
          </v-card>
        
            </v-col>
            </slot>
            <slot v-if="activePortfolio === 'mobileapp'">
                <v-col lg="3" v-for="(mobile,mobileindex) in mobileApps" :key="mobileindex">
                <v-card>
            <v-img
              src="./../assets/image3.png"
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="200px"
            >
              <v-card-title>{{mobile.title}}</v-card-title>
            </v-img>

            
          </v-card>
        
            </v-col>
            </slot>
            <slot v-if="activePortfolio === 'desktopapp'">
                <v-col lg="3" v-for="(desktop,desktopindex) in desktopApps" :key="desktopindex">
                <v-card>
            <v-img
              src="./../assets/image1.png"
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="200px"
            >
              <v-card-title>{{desktop.title}}</v-card-title>
            </v-img>

            
          </v-card>
        
            </v-col>
            </slot>
        </v-row>
    </v-container>
</template>

<script>
export default{
    name: "Portfolio",
    data(){
        return{
            activePortfolio:'webapp',
            webApps:[
                {title:'Web App 1', image:'./../assets/hero-img.png'},
                {title:'Web App 2', image:'./../assets/hero-img.png'},
                {title:'Web App 3', image:'./../assets/hero-img.png'},
                {title:'Web App 4', image:'./../assets/hero-img.png'},
                {title:'Web App 5', image:'./../assets/hero-img.png'},
                {title:'Web App 6', image:'./../assets/hero-img.png'},
                {title:'Web App 7', image:'./../assets/hero-img.png'},
            ],
            
            mobileApps:[
            {title:'Web App 1', image:''},
                {title:'Web App 2', image:'./../assets/hero-img.png'},
                {title:'Web App 3', image:'./../assets/hero-img.png'},
                {title:'Web App 4', image:'./../assets/hero-img.png'},
                {title:'Web App 5', image:'./../assets/hero-img.png'},
                {title:'Web App 6', image:'./../assets/hero-img.png'},
                {title:'Web App 7', image:'./../assets/hero-img.png'},
            ],
            
            desktopApps:[
                {title:'Web App 1', image:'./../assets/hero-img.png'},
                {title:'Web App 2', image:'./../assets/hero-img.png'},
                {title:'Web App 3', image:'./../assets/hero-img.png'},
                {title:'Web App 4', image:'./../assets/hero-img.png'},
                {title:'Web App 5', image:'./../assets/hero-img.png'},
                {title:'Web App 6', image:'./../assets/hero-img.png'},
                {title:'Web App 7', image:'./../assets/hero-img.png'},
            ]
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
p.desc{
    font-size: 19px;
    font-family: cursive;
    margin:32px 0px;
    color:#444444ba
}
</style>


