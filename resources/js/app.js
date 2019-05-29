import axios from 'axios';
require('./bootstrap');

window.Vue = require('vue');
// Desktop
Vue.component('app-desktop', require('./components/desktop/container.vue').default);
Vue.component('app-message', require('./components/desktop/message.vue').default);

// Mobile
Vue.component('app-container', require('./components/mobile/container.vue').default);


Vue.component('app-container', require('./components/welcome/containerwelcome.vue').default);
Vue.component('app-index', require('./components/index/index.vue').default);
Vue.component('app-promte', require('./components/activity/promote.vue').default);
Vue.component('app-lobby', require('./components/lobby.vue').default);
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


const app = new Vue({
    el: '#app'
});