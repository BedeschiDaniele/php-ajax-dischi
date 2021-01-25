import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue (
  {
    el:"#app",
    data: {
      all_cd: []
    },
    mounted: function() {
      var self = this;
      axios
      .get("http://localhost/php-ajax-dischi/server.php")
      .then(
        function (response) {
          self.all_cd = response.data;
        }
      );
    }
  }
);
