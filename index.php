<!-- 
1) Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

2) Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

3) Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div id="app" class="bg_1E2D3B">
        <div>
            <select v-model="selectGenre" name="" id="" @change="genreFunction">
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
            </select>
        </div>

        <div class="container d-flex justify-content-center py-5">
            <div class="row row-cols-6 justify-content-center">
                <div v-for="(element, index) in arrayElementi" class="col p-2 m-2 text-white bg_2E3A46">
                    <img :src="`${element.poster}`" alt="" class="img-thumbnail">
                    <h3>{{element.title}}</h3>
                    <h6>{{element.author}}</h6>
                    <h6>{{element.year}}</h6>
                </div>
            </div>
        </div>
    </div>


<!-- Vue 2 cdn -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- Axios cdn -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Nostro main js -->
<script src="./assets/js/main.js"></script>
<!-- cdn bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>