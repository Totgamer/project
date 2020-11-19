var request = new XMLHttpRequest();

request.open('GET', "localhost:8080/v1/shopworks/products");

request.onload = function() {
    var response = request.response;
    var parsedData = JSON.pase(response);
    console.log(parsedData);
    var description = parsedData;
};

request.send();