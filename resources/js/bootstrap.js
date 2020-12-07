import Axios from "axios";
import * as lodash from 'lodash';

/**
 * Lodash is a JavaScript library which provides
 * utility functions for common programming tasks using
 * the functional programming paradigm
 */
window._ = lodash;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
window.axios = Axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
