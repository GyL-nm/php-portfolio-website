function nextState (element, states, currentState) {
    currentState = (currentState >= states.length-1) ? 0 : currentState+1;

    element.innerHTML = states[currentState];

    return currentState;
} 

function animateShadow (element, states, state, delay) {
    setTimeout(function() { 
        state = nextState(element, states, state); 
        animateText(element, states, state, delay); 
    }, delay);
}

var pageLogo = document.getElementById("pagebody-logo-img");
var shadowTemplate = "drop-shadow({x} {y} 0 rgba(255,255,255,{a}))";

function getShadows() {
    pageLogo = document.getElementById("pagebody-logo-img");

    let shadowValues =  [{x:pageLogo.style.getPropertyValue("s1x"), y:pageLogo.style.getPropertyValue("s1y"), a:pageLogo.style.getPropertyValue("s1a")},
                        {x:pageLogo.style.getPropertyValue("s2x"), y:pageLogo.style.getPropertyValue("s2y"), a:pageLogo.style.getPropertyValue("s2a")},
                        {x:pageLogo.style.getPropertyValue("s3x"), y:pageLogo.style.getPropertyValue("s3y"), a:pageLogo.style.getPropertyValue("s3a")},
                        {x:pageLogo.style.getPropertyValue("s4x"), y:pageLogo.style.getPropertyValue("s4y"), a:pageLogo.style.getPropertyValue("s4a")},
                        {x:pageLogo.style.getPropertyValue("s5x"), y:pageLogo.style.getPropertyValue("s5y"), a:pageLogo.style.getPropertyValue("s5a")},
                        {x:pageLogo.style.getPropertyValue("s6x"), y:pageLogo.style.getPropertyValue("s6y"), a:pageLogo.style.getPropertyValue("s6a")},
                        {x:pageLogo.style.getPropertyValue("s7x"), y:pageLogo.style.getPropertyValue("s7y"), a:pageLogo.style.getPropertyValue("s7a")} ];

    return shadowValues;
}

function setShadows(pageLogo, shadowValues) {
    let shadowString = "";

    for(let i=0; i<shadowValues.length; i++) {
        shadowString += "dropShadow(var(s" +i+"x," +shadowValues[i]['x']+ ") var(s" +i+"y," +shadowValues[i]['y']+ ") 0 rgba(255,255,255,var(s" +i+ "a," +shadowValues[i]['a']+ ") ))\n";
    }

    // shadowString += ";";

    console.log(pageLogo);
    console.log(shadowString);

    pageLogo.style.filter = shadowString;
}

// document.addEventListener( "DOMContentLoaded", setShadows(document.getElementById("pagebody-logo-img"),
//     [{x:5, y:-6, a:0.7},
//     {x:5, y:-6, a:0.7},
//     {x:5, y:-6, a:0.7},
//     {x:5, y:-6, a:0.7},
//     {x:5, y:-6, a:0.5},
//     {x:5, y:-6, a:0.5},
//     {x:5, y:-6, a:0.3}]) );