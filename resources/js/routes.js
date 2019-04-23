import Home from './components/Home';
import About from './components/About';
import Projects from './components/Projects';
import Contact from './components/Contact';
import NotFound from './components/404';

export default {
    mode: 'history',

    linkActiveClass: 'active',

    routes: [
        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About
        },

        {
            path: '/projects',
            component: Projects
        },

        {
            path: '/contact',
            component: Contact
        }
    ]
};
