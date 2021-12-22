// Import bootstrap file.
require('./bootstrap');

// Import alpine js file.
require('alpinejs');

// Init Common & load.
(window['Common'] = require('./load.js')).init();

// Import Vue.
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll';

// Set components.
Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);

// Import moment.
Vue.use(require('vue-moment'));
Vue.use(VueChatScroll);

Vue.component('countdown-counter',{
    template: `
  	<div>
      <div v-show ="statusType !== 'expired'">
        <div class="day">
          <span class="number">{{ days }}</span>
          <div class="format">{{ wordString.day }}</div>
        </div>
        <div class="hour">
          <span class="number">{{ hours }}</span>
          <div class="format">{{ wordString.hours }}</div>
        </div>
        <div class="min">
          <span class="number">{{ minutes }}</span>
          <div class="format">{{ wordString.minutes }}</div>
        </div>
        <div class="sec">
          <span class="number">{{ seconds }}</span>
          <div class="format">{{ wordString.seconds }}</div>
        </div>
      </div>
      <div class="message">{{ message }}</div>
    </div>
  `,
    props: ['starttime','endtime','trans'] ,
    data: function(){
        return{
            timer:"",
            wordString: {},
            start: "",
            end: "",
            interval: "",
            days:"",
            minutes:"",
            hours:"",
            seconds:"",
            message:"",
            statusType:"",
            statusText: "",

        };
    },
    created: function () {
        this.wordString = JSON.parse(this.trans);
    },
    mounted(){
        this.start = new Date(this.starttime).getTime();
        this.end = new Date(this.endtime).getTime();
        // Update the count down every 1 second
        this.timerCount(this.start,this.end);
        this.interval = setInterval(() => {
            this.timerCount(this.start,this.end);
        }, 1000);
    },
    methods: {
        timerCount: function(start,end){
            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = start - now;
            var passTime =  end - now;

            if(distance < 0 && passTime < 0){
                this.message = this.wordString.expired;
                this.statusType = "expired";
                this.statusText = this.wordString.status.expired;
                clearInterval(this.interval);
                return;

            }else if(distance < 0 && passTime > 0){
                this.calcTime(passTime);
                this.message = this.wordString.running;
                this.statusType = "running";
                this.statusText = this.wordString.status.running;

            } else if( distance > 0 && passTime > 0 ){
                this.calcTime(distance);
                this.message = this.wordString.upcoming;
                this.statusType = "upcoming";
                this.statusText = this.wordString.status.upcoming;
            }
        },
        calcTime: function(dist){
            // Time calculations for days, hours, minutes and seconds
            this.days = Math.floor(dist / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            this.minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((dist % (1000 * 60)) / 1000);
        }

    }
});

// Init Vue.
const app = new Vue({

    // Attach components to element.
    el: '#chat',

    // Props used.
    data: {
        messages: []
    },

    // Init on page load.
    created() {

        // Return all current messages.
        this.fetchMessages();

        // Listen to event. New messages will be loaded.
        Echo.channel('chat')
            .listen('MessageSent', (e) => {
                console.log(e);
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    },

    methods: {

        // Fetch all messages.
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },

        // Insert message in the database.
        addMessage(message) {
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
                console.log(response.data);
            });
        }
    },
});
