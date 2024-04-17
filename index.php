<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg_primary">
    <div id="app">
        <div class="container">
            <div class="row row-cols-3">
                <!-- Itero nei dischi e creo le varie card -->
                <div class="g-5" v-for='disk in disks'>
                    <div class=" bg_primary_dark px-2 py-5 mx-2 my-3 shadow rounded-3 card_border">
                        <img class="card-img-top px-5 pt-3" :src="disk.poster" alt="">
                        <div class="card_body text-light text-center py-3">
                            <h4 class="card-title">{{disk.title}}</h4>
                            <div class="card-text">{{disk.author}}</div>
                            <h5 class="card-text">{{disk.year}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>