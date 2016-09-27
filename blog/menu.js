
  var x = ['m1','m2','m3','m4'];
  for (var i = 0; i < x.length; i++) {

    var ob = document.getElementById(x[i]);
    ob.onclick = function (){

      for (var i = 0; i < x.length; i++) {

      document.getElementById(x[i]).style.backgroundColor="#7CCD7C";
      }
      this.style.backgroundColor = "#548B54";
   }
 }
