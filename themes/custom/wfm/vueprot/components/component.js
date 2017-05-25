var app = Vue.component('child', {
  props: ['text'],
  template: `<div>{{ text }}<div>`
});

var appBinding = new Vue({
  el: "#app",
  data() {
    return {
      message: 'Hello World'
    }
  }
});
