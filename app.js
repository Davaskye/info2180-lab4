window.onload = function() {
    let searchButton = document.getElementsByClassName("btn");
    console.log(searchButton[0]);


    searchButton[0].onclick = function(){
        doSomething();
    }
}


var httpRequest = new XMLHttpRequest(); 
var url = "http://localhost/info2180-lab4/superheroes.php"; 
httpRequest.onreadystatechange = doSomething; 
httpRequest.open('GET', url); 
httpRequest.send();

function doSomething() { 
    if (httpRequest.readyState === XMLHttpRequest.DONE) { 
      if (httpRequest.status === 200) { 
        var response = httpRequest.responseText; 
        alert(response); 
        //console.log(response);
      } else { 
        alert('There was a problem with the request.'); 
      } 
    } 
}



