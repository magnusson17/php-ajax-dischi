var app = new Vue({
    el: '#app',
    data: {
      arrayElementi: [],
      generi: [],
      selectGenre: '',
    },

    
    created(){
      axios.get( 'http://localhost/php-ajax-dischi/assets/api/database.php' )
      .then((res) => {
        console.log(res.data);
        this.arrayElementi = res.data;

        this.arrayElementi.forEach(element => {
          if( !this.generi.includes(element.genre) ) {
            this.generi.push(element.genre);
          }
        });
        console.log(this.generi);
      })
    },
    
    methods: {
      genreSelector() {
        axios.get( `http://localhost/php-ajax-dischi/assets/api/database.php?genere=${this.selectGenre}` )
        .then((res) => {
          this.arrayElementi = res.data;
        })
      }
    }
})