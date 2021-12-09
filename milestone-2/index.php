<?php
require __DIR__ . '/layouts/Head.php';
?>
.

<body>
    <?php require __DIR__ . '/layouts/Header.php';?>
    <main>
        <div id="app">
            <div class="container-fluid gx-5 position-relative">
                <div class="row gx-5 gy-5 justify-content-center">
                    <div class="col-2" v-for="disc in discs" :key="disc.title">
                        <div class="card border-0 p-4">
                            <img :src="disc.poster" alt="" class="mb-4" />
                            <h5 class="text-center text-white">
                                {{disc.title}} </h5>
                            <p class="text-center text-white ">{{disc.author}}</p>
                            <p class="text-center text-white ">{{disc.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require __DIR__ . '/layouts/Footer.php';?>
</body>

</html>