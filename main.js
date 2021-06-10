

const app = new Vue({

  el: '#app',

  data: {

    albums: [],
    genres: [],
    genreToSearch: 'all',
    apiURL: 'api.php'

  },

  methods: {

    getAPI() {
      axios.get(this.apiURL, {
        params: {
          genre: this.genreToSearch
        }
      })
      .then(res => {

        this.albums = res.data.albums;
        this.genres = res.data.genres;
        console.log(res.data.albums);
        console.log(res.data.genres);

      }).catch(err => {

        console.log(err);

      })
    }

  },

  created() {
    
    this.getAPI();
    
  }
  
});