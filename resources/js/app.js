
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('chat-message', require('./components/ChatMessage.vue').default);
Vue.component('chat-log', require('./components/ChatLog.vue').default);
Vue.component('chat-composer', require('./components/ChatComposer.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        messages:[]
    },
    methods: {

        addMessage(message){
            this.messages.push(message);
            axios.post('/messages', message).then(response => {

            })
        }
    },
    created(){

        Pusher.logToConsole = false;

        var pusher = new Pusher('b9d6b76c260e396985e9', {
            cluster: 'eu',
            forceTLS: true
          });


        var channel = pusher.subscribe('my-channel');
        let vm = this;
        channel.bind('my-event', function(data) {
            let obj = {};
            obj.user = {};
            obj.user.name = data.name;
            obj.message = data.message;
            console.log(obj);
            vm.messages.push(obj);
        });

        console.log("ok");

        setInterval(function () {
            axios.get('/messages').then(response => {
                this.messages= response.data;
            });
        }.bind(this), 1000);

        Echo.join('chatroom').listen('MessagePosted', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user.name
                });


            });

    }
});
