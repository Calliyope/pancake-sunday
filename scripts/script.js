(function () {

    // Get the current date

    let datetimeNow = new Date();
    console.log(datetimeNow);



    // parse the date info into the desired readable format

    const options = {
        weekday: 'long',
        //year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    // display the nice new date in the html

    document.getElementById("current-date").innerHTML = datetimeNow.toLocaleDateString('en-EN', options);
})();

(function () {

    // Get the current cooker

    let cooker = "Filip";
    console.log(cooker);

    // display the cookers name in the html

    document.getElementById("current-cooker").innerHTML = cooker;
})();

(function () {

    // Get the current eater

    let eater = "Erin";
    console.log(eater);

    // display the eaters name in the html

    document.getElementById("current-eater").innerHTML = eater;
})();