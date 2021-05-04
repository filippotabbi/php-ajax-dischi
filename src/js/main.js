Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  index: 0,
  data: {
    disks: [],

  },
  mounted() {
      axios.get('http://localhost/php/php-ajax-dischi/call.php')
      .then((response) => {
        this.disks = response.data.response

      });
    }
  })
