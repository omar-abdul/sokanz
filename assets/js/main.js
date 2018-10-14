var header = document.getElementById('header');
$.getJSON('https://ipapi.co/json/', function(data) {
  console.log(JSON.stringify(data, null, 2));
});
window.onscroll = function(){

	if(window.pageYOffset > 0 ){
		header.classList.add("sticky-nav");

	}
	else  {
		header.classList.remove("sticky-nav")
	}
}
window.sr = ScrollReveal({reset:true});

sr.reveal('.decorated',{origin:'right' ,delay:300});
sr.reveal('.row',{origin:'bottom',delay:300 });

var scroll = new SmoothScroll('a[href*="#"]');

function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}




var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.querySelectorAll('div.col-25 > img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.forEach(function (e){
e.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
 

    captionText.innerHTML = this.alt;
}	
})


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}



var forms = document.querySelectorAll('form');

forms.forEach(function(f){
    f.addEventListener('submit',function(event){
        event.preventDefault();
        sendData(f);
    });
});

var anchorTag = document.getElementById('contactAnchor');
function sendData(form){
    var XHR = new XMLHttpRequest();
    var url = form.getAttribute('action');

    //bind formdata object to the form element
    var fd = new FormData(form);
    XHR.addEventListener('load',function(event){
        anchorTag.click();
        showMsg("success");
    });

    XHR.addEventListener('error',function(event){
        anchorTag.click();
        showMsg("fail");
    })

    XHR.open("POST",url);
    XHR.send(fd);
}

var msgDiv = document.getElementById('msg');

function showMsg(classString){
        msgDiv.style.display="block";
        msgDiv.className = classString;

        var para = document.createElement("p");
        var text = classString =='success'? 
        "Thank you for contacting us we will get back to you shortly":
        "There was a problem try again in a little bit";
        var node = document.createTextNode(text);
        para.appendChild(node);

        msgDiv.appendChild(para);

}
