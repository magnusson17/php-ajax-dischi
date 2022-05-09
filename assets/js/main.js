var app = new Vue({
    el: '#app',
    data: {
      arrayElementi: [],

      selectGenre: '',
    },

    
    created(){
      axios.get( 'http://localhost/php-ajax-dischi/assets/api/integers.php' )
      .then((res) => {
        console.log(res.data);
        this.arrayElementi = res.data;
      })
    },
    
    methods: {
      genreFunction() {
        console.log(this.selectGenre);
        for(i = 0; i < this.arrayElementi; i++) {
          console.log(this.arrayElementi[i].genre);
          if(this.arrayElementi[i].genre.includes(this.selectGenre)) {
            this.arrayElementi = this.arrayElementi[i].genre
          }
        }
      }
    }
})