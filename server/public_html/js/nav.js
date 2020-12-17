var pathArray = window.location.pathname.split('/');
console.log(pathArray);

var nav = 'home';
if(pathArray[1]!='')
    nav = pathArray[1];
console.log(nav);

let navEl = document.getElementById(nav);
console.log(navEl);
navEl.className += ' active';