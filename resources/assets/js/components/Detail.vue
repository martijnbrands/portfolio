<!-- <template>
    <div class="post-detail">
        <h1>{{ post.title }}</h1>
        
    </div>
</template>


<script>
    export default {

        data (){
            return {
                posts: {},
                slug: this.$route.params.slug
            }
        },

        created (){
            this.fetchPosts();
        },

        methods:{
            
            fetchPosts(){
                axios.get("/posts/fetch/" + this.slug, {
                    })
                    .then((response) => {
                        console.log(data);
                        this.posts = data.body;
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
 -->