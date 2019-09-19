window.onload=function(){

function toggleClass(element, className){
    if (!element || !className){
        return;
    }

    var classString = element.className, nameIndex = classString.indexOf(className);
    if (nameIndex == -1) {
        classString += ' ' + className;
    }
    else {
        classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+className.length);
    }
    element.className = classString;
}


document.querySelector('.nav-toggle').addEventListener('click', function() {
    toggleClass(document.querySelector('.main-nav-items'), 'active');
    toggleClass(document.querySelector('.nav-toggle'), 'active');
    toggleClass(document.querySelector('.body'), 'hidden');
    toggleClass(document.querySelector('.overlay'), 'active');
});
}
