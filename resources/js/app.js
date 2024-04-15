import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'
import '~bootstrap/js/index.esm.js'
import * as bootstrap from 'bootstrap'

//precompilazione immagini
import.meta.glob([
    '../img/**'
    ])