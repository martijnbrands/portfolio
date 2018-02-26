<template>
    <div class="container post-list">
        <div class="post" v-for="post in posts">
            <article class="post" data-aos="fade-up" data-aos-anchor-placement="top-center">
                <a v-bind:href="'/posts/' + post.slug">
                    <h2>{{ post.title }}</h2>
                    <img v-bind:src="'/images/uploads/' + post.thumbnail"/>
                </a>
            </article>
        </div>
    </div>
</template>


<script>
    export default {

        data (){
            return {
                posts: []
            }
        },

        created (){
            this.fetchPosts();
        },

        methods:{
            
            fetchPosts(){
                axios.get("/posts/fetch", {
                    })
                    .then((response) => {
                        this.posts = response.data.posts;
                    })
                    .catch((error) => {
                        console.log("Something went wrong fetching the posts.")
                    });
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
