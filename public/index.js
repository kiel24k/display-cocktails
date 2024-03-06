

var xhr = new XMLHttpRequest();
xhr.open('GET', 'cocktail.json', true)

xhr.onload = () => {
    var users = JSON.parse(xhr.responseText);

    var output = ''
    for (var i in users) {
        output += '<div class="output">' +
            '<img width="150px" height="150px" src=" ' + users[i].strDrinkThumb + ' ">' +
            '<h1><p class="details">Details</p> ' + users[i].strInstructionsES + '</h1>' +
            '<br>' +
            '<br>' +
            '</ul>' +
            '</div>'
    }
    document.getElementById('cocktails-info').innerHTML = output


}
xhr.send()





