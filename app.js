window.onload = function() {
    let searchButton = document.getElementsByClassName("btn");

    searchButton[0].onclick = function(){
        httpRequest.send();
    }
}


var httpRequest = new XMLHttpRequest(); 
var url = "http://localhost/info2180-lab4/superheroes.php"; 
httpRequest.onreadystatechange = doSomething; 
httpRequest.open('GET', url); 


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



