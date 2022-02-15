<template>
   <div v-for="postcard in postcards" :key="postcard.id">
       <h2>Sender:{{$postcard.sender}}</h2>
   </div>
</template>
<script>
    export default {
        data() {
            return{
                postcards: [] 
            }
        
        },
        mounted() {
        
            axios.get('/api/postcards/list')
                    .then(res => this.postcards = res.data)
                    .catch(err => console.error(err));
        }
    }
   
</script>
<style lang="scss" scoped="scss">


</style>