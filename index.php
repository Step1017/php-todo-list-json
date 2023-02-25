<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP TO-DO LIST JSON</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="app">
            <div>
                <h2>Aggiungi To-Do</h2>
                <form action="create.php" method="POST" @submit.prevent="addTask()">
                    <div>
                        <label for="task-name">
                            Nome del task
                        </label>
                        <input type="text" v-model="newTask.taskName" name="task-name" id="task-name" minlength="1" maxlength="64" placeholder="Inserisci il nome del task..." required>
                    </div>
                    <button type="submit">
                        Aggiungi
                    </button>
                </form>
            </div>
            <ul>
                <!-- Aggiungo classe tramite v bind quando il valore è uguale a true -->
                <li v-for="(todo, index) in todos">
                    <span :class="{
                        done:todo.done == true
                        }">
                        {{ index + 1 }}. {{ todo.taskName }}
                    </span>
                </li>
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>