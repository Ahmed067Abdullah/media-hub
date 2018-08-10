function setActiveClass() {
    var path = window.location.pathname;

    //to remove the repeting portions of the path
    path = path.slice(10, path.length - 4);
    var classToTurnActive = "";
    if (path == "index" || path == "") {
        classToTurnActive = "home";
    } else if (path == "games") {
        classToTurnActive = "games";
    } else if (path == "movies") {
        classToTurnActive = "movies";
    } else if (path == "books") {
        classToTurnActive = "books";
    } else if (path == "software") {
        classToTurnActive = "softwares";
    } else if (path == "about") {
        classToTurnActive = "about";
    } else if (path == "contact") {
        classToTurnActive = "contact";
    }

    if (classToTurnActive != "")
        document.querySelector(`.${classToTurnActive}-page-link`).classList.add("active");
}

function getData(query) {

    // Setting paramters for POST request
    var param = `query=${query}`;
    var searchFooter;

    console.log("searh :", query);

    // Creating XHR object for AJAX Call
    var xmlhttp = new XMLHttpRequest();

    // If response has arrived for request made
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
            // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200) {
                // Return the response
                var result = this.responseText.trim();
                console.log(result.trim());
                if (result == "No") {
                    console.log('No rsult');
                    // If no user found against search
                    document.querySelector(".search-result").style.display =
                        "none";
                } else {
                    // Displaying search results
                    document.querySelector(".search-result").style.display =
                        "block";
                    document.querySelector(".search-result").innerHTML = result;

                    if (query.length == 0) {
                        document.querySelector(".search-result").style.display =
                            "none";
                        searchFooter = "";
                    } else {
                        // searchFooter = `<a class='see-more' href='allSearchResults.php?query=${query}'>See more</a>`;
                        // document.querySelector(".search-result").innerHTML += searchFooter;
                    }
                }

            } else if (xmlhttp.status == 400) {
                // alert('REJECTEd : 400');

            } else {
                // alert('REJECTEd : other');
            }
        }
    }

    xmlhttp.open('POST', './search.php', true);

    xmlhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xmlhttp.send(param);

    // Pain in the ass
    return false;

}