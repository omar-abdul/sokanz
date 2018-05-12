var header = document.getElementById('header');
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
console.log(img)
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