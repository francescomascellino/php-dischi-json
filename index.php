<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

</head>

<body data-bs-theme="dark" class="bg-body">

    <div id="app">

        <!-- NAV -->
        <nav class="navbar navbar-expand-sm navbar-light bg-secondary-subtle">
            <div class="container">
                <div class="row">
                    <div class="col m-0">
                        <a class="navbar-brand px-2" href="#"><img src="./assets/img/logo.svg" alt="Disk Database" style="height: 3rem;"></a>
                    </div>

                </div>

            </div>
        </nav>


        <div class="container">

            <div class="row my-3 g-3 p-2">


                <!-- MODAL -->
                <div class="modal fade" :id="`${disk.author.replace(/\s+/g, '')}${index}`" tabindex="-1" :aria-labelledby="`${disk.author.replace(/\s+/g, '')}${index}Label`" aria-hidden="true" v-for="(disk, index) in disks" :key="`${disk.author.replace(/\s+/g, '')}${index}`">

                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" :id="`${disk.author.replace(/\s+/g, '')}${index}`">{{disk.title}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img :src="disk.poster" :alt="disk.title" style="width: 100%;" class="mb-4">
                                <p><strong>Autore: </strong>{{disk.author}}</p>
                                <p><strong>Anno: </strong>{{disk.year}}</p>
                                <p><strong>Genere: </strong>{{disk.genre}}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- DISK CARDS -->
                <div class="col-4" v-for="(disk, index) in disks" :key="`${disk.author.replace(/\s+/g, '')}${index}`">
                    <div class="card bg-dark-subtle" data-bs-toggle="modal" :data-bs-target="`#${disk.author.replace(/\s+/g, '')}${index}`" :id="`${disk.author.replace(/\s+/g, '')}${index}`">
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

<!-- BS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- JS -->
<script src='./main.js'></script>

</html>