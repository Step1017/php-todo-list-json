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
                <li v-for="(todo, index) in todos">
                    {{ index + 1 }}. {{ todo.taskName }}
                </li>
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>