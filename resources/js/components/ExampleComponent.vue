<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component bgjhdfhhgfhvgvgv.
                        <p v-for="c in categories" :key="c.id">{{c}}</p>
                        {{age}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ExampleComponent',
        data(){
            return{
                username : 'bahar',
                age : 20,
                categories: '',
            }
        },
        mounted(){
            axios.default.get('http://jsonplaceholder.typicode.com/posts').then((res)=>{
                this.categories = res.data[0].title;
                console.log(this.categories)
            })
            console.log('Component mounted.')
        }
    }
</script>
