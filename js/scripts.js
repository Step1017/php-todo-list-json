const { createApp } = Vue;
    createApp({
        data(){
            return {
                todos: [],
                newTask: {
                    taskName: '',
                    done: false
                }
            }
        },
        methods: {
            addTask() {
                console.log('chiamato addTask', this.newTask);

                axios
                    .post('./create.php', {
                        task: this.newTask
                    }, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then((response) => {
                        console.log(response);

                        //1^ soluzione per aggiungere il task alla lista senza dover riaggiornare la pag
                        /*this.todos.push({
                            taskName: this.newTask.taskName,
                            done: this.newTask.done
                        });*/

                        //2^ soluzione per aggiungere il task alla lista senza dover riaggiornare la pag(dopo aver salvato il nuovo dato in create.php, restituiamo l'array intero)
                        this.todos = response.data.todos;

                        //svuotiamo l'input
                        this.newTask.taskName ='';
                    });
            }
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