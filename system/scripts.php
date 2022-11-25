<script>
	//disabled links section
	
window.onload=function(){
document.body.addEventListener('click', function (event) {
  // filter out clicks on any other elements
  if (event.target.nodeName == 'A' && event.target.getAttribute('aria-disabled') == 'true') {
    event.preventDefault();
  }
});
};


	var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

 

/*
if ( window !== window.parent ) 
{
	alert("plz open in new tab");
} */
</script>
