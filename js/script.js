function setActiveClass(){
    var path = window.location.pathname;

    //to remove the repeting portions of the path
    path = path.slice(10,path.length-4);
    var classToTurnActive = "";
    if(path == "index" || path == ""){
        classToTurnActive = "home";
    }
    else if(path == "games"){
        classToTurnActive = "games";
    }
    else if(path == "movies"){
        classToTurnActive = "movies";
    }
    else if(path == "books"){
        classToTurnActive = "books";
    }
    else if(path == "software"){
        classToTurnActive = "softwares";
    }
    else if(path == "about"){
        classToTurnActive = "about";
    }
    else if(path == "contact"){
        classToTurnActive = "contact";
    }

    if(classToTurnActive != "")
        document.querySelector(`.${classToTurnActive}-page-link`).classList.add("active");
}