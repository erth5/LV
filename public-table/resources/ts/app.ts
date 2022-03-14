// @ts-ignore
require('./bootstrap');

// own query selector
let $f = function (object) {
    return document.querySelector(object);
};

let DARKMODE

// apply mode
const setClassToBody = () => {
    if (DARKMODE) {
        $f('body').classList.remove('light');
        $f('body').classList.add('dark');
    } else {
        $f('body').classList.remove('dark');
        $f('body').classList.add('light');
    }
    //console.log("darkmode = " + DARKMODE)
}

// settings from locale storage available ?
switch (localStorage.getItem('darkmode')) {
    case null:
        // First Visit = unavailable
        DARKMODE = window.matchMedia('(prefers-color-scheme: dark)').matches;
        localStorage.setItem('darkmode', String(DARKMODE))
        break;
    case 'true':
        DARKMODE = true
        break;
    case 'false':
        DARKMODE = false
        break;
    default:
        console.log("INFO: Unable to read theme preference from system")
        DARKMODE = false
        break;
}
setClassToBody()

// implement Theme-Button to switch Theme
const switchMode = () => {
    DARKMODE = !DARKMODE
    localStorage.setItem('darkmode', String(DARKMODE))
    setClassToBody();
    const input = document.getElementById('switch')
    if (DARKMODE == true) { // @ts-ignore
        input?.innerText = "Lightmode"
    }
    if (DARKMODE == false) { // @ts-ignore
        input?.innerText = "Darkmode"
    }
};

if (document.getElementById('switch') == null)
    console.log("INFO: no Theme Button found")
else { // @ts-ignore
    const input = document.getElementById('switch')
    // @ts-ignore
    input.addEventListener('click', switchMode)
    setClassToBody()
}

//console.log("function js fin")
