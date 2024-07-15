import './bootstrap';

// ? Importiamo scss generale
import '~resources/scss/app.scss';

// ? importiamo bootstrap
import * as bootstrap from 'bootstrap';



import.meta.glob([
    '../img/**'
]);

// ! Add @vite('resources/js/app.js') to the pages that want to implement it (layouts included, eventually)
// ! <img src="{{Vite::asset('resources/img/example-img')}}" alt=""> To add an img from resources in html , for css just use bgimage: url(normal path)
