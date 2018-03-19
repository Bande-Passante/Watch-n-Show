$(document).ready(function () {
    var user_data = "";


    function loadApiUsers() {
        $.getJSON("https://api.myjson.com/bins/xjvs5")
            .done(function (data) {
                user_data = data;
                console.log("J'y suis la? Dans DONE ?");
                console.log(user_data);
                userListGeneration();
            })
            .fail(function () {
                console.log("Et la ? Dans fail ?");
                alert('fail');
            })
            .always(function () {
                console.log("J'y suis la? Dans ALWAYS ?");
            });
        console.log("Alors j'suis au bout?");
    };


    function userListGeneration() {
        // debugger;
        for (i = 0; i < user_data.length; i++) {
            $('#first_name').append('<p class="list">' + user_data[i].first_name + '</p>');
            $('#last_name').append('<p class="list">' + user_data[i].last_name + '</p>');
            // $('#email').append('<p class="list">' + user_data[i].email + '</p>');
            // $('#gender').append('<p class="list">' + user_data[i].gender + '</p>');
            if (user_data[i].gender == "Male") {
                $('#gender').append('<img  src="img/footblue.png" class="list"><br>');
            }
            else {
                $('#gender').append('<img src="img/dancepink.png" class="list"><br>');
            }
            // $('#status').append('<p class="list">' + user_data[i].status + '</p>');
            if (user_data[i].status == "En ligne") {
                $('#symb2').append('<img  src="img/green.png" class="list"><br>');
            }
            else {
                $('#symb2').append('<img src="img/red.png"class="list"><br>');
            }
        }
    };


    function selectStatusSymb(user_status) {
        var green = "img/green.png";
        var red = "img/red.png"
        if (user_status = "En ligne") {
            light = green;
        }
        else {
            light = red;
        }
        return light;
    };


    loadApiUsers()


});