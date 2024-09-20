/* Importar o framework bootstrap */
import 'bootstrap';

import axios from 'axios';
window.axios = axios;

import Swal from 'sweetalert2'
// executa o sweetalert
window.Swal = Swal;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
