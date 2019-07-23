import axios from 'axios';
require('./bootstrap');
Vue.use(require('vue-moment'));
window.Vue = require('vue');
// Desktop
Vue.component('app-desktop', require('./components/desktop/container.vue').default);
Vue.component('app-message', require('./components/desktop/message.vue').default);

// Mobile
Vue.component('app-container', require('./components/mobile/container.vue').default);

// Admin
Vue.component('app-containeradmin', require('./components/admin/container.vue').default);
Vue.component('app-shareholder', require('./components/shareholder/container.vue').default);

// Mobile
Vue.component('app-mobile', require('./components/mobile/container.vue').default);
Vue.component('app-myaccount', require('./components/mobile/profile.vue').default);
Vue.component('app-taps', require('./components/mobile/taps.vue').default);
Vue.component('app-messagemb', require('./components/mobile/mymessage.vue').default);

Vue.component('app-container', require('./components/welcome/containerwelcome.vue').default);
Vue.component('app-index', require('./components/index/index.vue').default);
Vue.component('app-promte', require('./components/activity/promote.vue').default);
Vue.component('app-lobby', require('./components/lobby.vue').default);
Vue.component('app-chat', require('./components/desktop/chat.vue').default);
Vue.component('app-stocklist', require('./components/stocklist.vue').default);
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);
// main.js
import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

import Notifications from 'vue-notification'
Vue.use(Notifications)
import Vue from 'vue'
import VueAwesomeSwiper from 'vue-awesome-swiper'

// require styles
import 'swiper/dist/css/swiper.css'
import VueMoment from 'vue-moment'

Vue.use(VueAwesomeSwiper)

const app = new Vue({
    el: '#app',
})