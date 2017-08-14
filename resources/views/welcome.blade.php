<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas Vuejs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div id="main" class="container">
    <div class="row">
        <div class="col-sm-4">
            <h1>Lista Vuejs - AJAX</h1>
        </div>
        <div class="col-sm-8">
            <h1>JSON</h1>
            <pre>
                @{{ $data | json }}
            </pre>
        </div>
    </div>
    <ul>
        <li v-for="item in people" v-text="item"></li>
    </ul>
    <input type="text" v-model="name" v-on:keyup.enter="addName">
    <ul>
        <input type="text" v-model="info">
        <p v-bind:title="info">Texto de relleno... @{{info}}</pv-b>
    </ul>

</div>



<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>