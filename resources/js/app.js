// load other libraries
import './bootstrap';

// MomentJs making date and time better on the web
import 'moment';

// import section,
// `require` load the whole bundle of a library
// `import` only load things that are necessary for our application

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import ApolloClient from 'apollo-boost';
import VueApollo from 'vue-apollo';


Vue.mixin({ methods: { route } });

// additional Vue plugins
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueApollo);

const apolloClient = new ApolloClient({
    uri: 'http://localhost/graphql'
});

const apolloProvider = new VueApollo({
    defaultClient: apolloClient
});

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
    apolloProvider
}).$mount(app);
