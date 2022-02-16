<template>
    <div>
        <div class="container" v-for="postcard in postcards" :key="postcard.id">
            <h3>Mittente:{{ postcard.sender }}</h3>
            <h4>Indirizzo: {{ postcard.address }}</h4>
            <p>{{postcard.text}}</p>
            <div><img v-if="postcard.image" :src="'/storage/postcards/' + postcard.image" alt="" ></div>
        </div>
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
.container {
    border: 2px  solid black;
    width: 400px;
    margin: 10px auto;
    div {
        width: 100px;
        margin: 0 auto;
        img {
            max-width: 100px;
            margin: 10px 0;
        }

    }
   
}


</style>