function nextState (element, states, currentState) {
    currentState = (currentState >= states.length-1) ? 0 : currentState+1;

    element.innerHTML = states[currentState];

    return currentState;
} 

function animateText (element, states, state, delay) {
    setTimeout(function() { 
        state = nextState(element, states, state); 
        animateText(element, states, state, delay); 
    }, delay);
}



if (window.location.pathname == "/nmacfoy-phase2/about.php" || 
    window.location.pathname == "/nmacfoy-phase2/hobbies.php" || 
    window.location.pathname == "/nmacfoy-phase2/education.php" || 
    window.location.pathname == "/nmacfoy-phase2/experience.php"|| 
    window.location.pathname == "/nmacfoy-phase2/skills.php"|| 
    window.location.pathname == "/nmacfoy-phase2/projects.php") {
        const nextButton = document.getElementById("nextpage-button");
        const aboutTextCursorElement = document.getElementById("animated-cursor");

        const aboutTextContent = aboutTextCursorElement.innerHTML; 
        document.addEventListener( "DOMContentLoaded", animateText(nextButton, [">", ">_"], 0, 550) );
        document.addEventListener( "DOMContentLoaded", animateText(aboutTextCursorElement, [aboutTextContent + "|", aboutTextContent], 0, 600) );
}

if (window.location.pathname == "/nmacfoy-phase2/index.php") {
    const welcomeMsgElement = document.getElementById("welcome-msg");

    const welcomeMsg = welcomeMsgElement.innerHTML;

    document.addEventListener( "DOMContentLoaded", animateText(welcomeMsgElement, [welcomeMsg +"👋", welcomeMsg +"🖐"], 0, 500) );
}