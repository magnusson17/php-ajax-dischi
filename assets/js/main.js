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
        console.log(this.selectGenre);
          })
    },

    methods: {
      genreFunction() {

      }
    }
})