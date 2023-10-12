<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div id="app">

        <div class="container">
            <div class="row my-3 g-3 p-2">
                <div class="col-4" v-for="(disk, index) in disks" :key="index">
                    <div class="card">
                        <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{disk.author}}</h6>
                            <p class="card-text">{{disk.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

<!-- VUE CDN -->
<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

<!-- AXIOS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- JS -->
<script src='./main.js'></script>

</html>