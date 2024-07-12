import.meta.glob(["../images/**"]);
import axios from 'axios';
import Alpine from 'alpinejs'
import Parent from "@ryangjchandler/alpine-parent";
Alpine.plugin(Parent);
window.Alpine = Alpine;
window.Alpine.start();
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
