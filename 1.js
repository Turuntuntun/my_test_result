var canvas = document.getElementById("deshif");
var context = canvas.getContext('2d');
var deshifr = new Image();
deshifr.src = "154800137443598227.png";
deshifr.onload = function() {
    context.drawImage(deshifr, 0, 0);
    var imageData = context.getImageData(0, 0, deshifr.width, deshifr.height );
    s = 0; x = 0; y = 0;
    for (var i = 0; i < imageData.data.length; i += 4) {
                    if(x == deshifr.width){
                    	x = 0;
                    	y ++;
                    }
                    s += x + y * 80	;
                    red = imageData.data[i] + s ; 
                    green =  (imageData.data[i + 1] - s) & 0xff;  
                    blue =  imageData.data[i + 2] + s ;   
                    
                    imageData.data[i] =   (red % 256) ;  
                    imageData.data[i + 1] = (green % 256) ;
                    imageData.data[i + 2] = (blue % 256) ;                                  
                    x ++;     
                }            
    context.putImageData(imageData, 0, 0);
};
///////
//var ele = doc.getElementsByTagName('*');	

console.log(getFatDiv());
function getFatDiv(){
	var doc = document.getElementsByTagName("div");
	var len = doc.length;
	var result, resultLength = 0;
	if(len){
		for(i = 0; i < len; i++){
			count = doc[i].getElementsByTagName('*').length;
			if(count > resultLength){
				result = doc[i];
				resultLength = count;
			}
		}
		return result;
	}
	else{
		return null;
	}
}




