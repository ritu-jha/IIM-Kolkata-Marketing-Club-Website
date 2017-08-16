
var count = 0;
function change (element) {
		var x = element.id;
		//alert (x);
		if(x=="next"){
			count++;
			var k = element.rel;
			k = parseInt(k);
			k=count*k;
			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
			    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			      document.getElementById("main").innerHTML=xmlhttp.responseText;
			    }
			  }
			  xmlhttp.open("GET","post.php?q="+k,true);
			  xmlhttp.send();
					}
		else{
			count--;
			var k = element.rel;
			k = parseInt(k);
			k=count*k;
			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","post.php?q="+k,true);
  xmlhttp.send();
		}
}