const { createApp } = Vue;
    createApp({
        data(){
            return {
                todos: [ ]
            }
        },
        methods: {

        },
        created() {
            axios
                .get('./api.php')
                .then((response) => {
                    console.log(response);

                    this.todos = response.data;
                });
        }
    }).mount('#app');