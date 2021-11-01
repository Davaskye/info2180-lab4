window.onload = function() {
    let searchButton = document.getElementsByClassName("btn");

    searchButton[0].addEventListener("click", function(event){
        event.preventDefault()
    });

    searchButton[0].onclick = function(){
        let searchVal = document.getElementById("character-search").value;
        httpRequest.onreadystatechange = doSomething; 
        httpRequest.open('POST', "superheroes.php?character-search=" +searchVal);
        httpRequest.send();
    }

}


var httpRequest = new XMLHttpRequest(); 


function doSomething() { 
    if (httpRequest.readyState === XMLHttpRequest.DONE) { 
      if (httpRequest.status === 200) { 
        var response = httpRequest.responseText; 
        let results = document.getElementById("result");
        //alert(response);
        results.innerHTML = response; 
        //console.log(response);
      } else { 
        alert('There was a problem with the request.'); 
      } 
    } 
}



