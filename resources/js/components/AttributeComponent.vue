<template>
<div>
    fgdhdh
    <p v-for="c in categories" :key="c.id">{{c.title}}</p>
    {{age}}
</div>
</template>

<script>
    export default {
        name: "AttributeComponent",
        data(){
            return{
                username : 'bahar',
                age : 20,
                categories: [{title:'ggggggggg'}],
            }
        },
        mounted(){
            // axios.default.get('http://jsonplaceholder.typicode.com/posts').then((res)=>{
            //     this.categories= res.data;
            //     console.log(this.categories)
            // })
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>
