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