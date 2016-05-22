
function print_doc(){
window.print() ;
}
       
      var i=0;
      function onClick(e){  
       var parent =e.parentNode.parentNode; 

	   
	    if(parent.getElementsByClassName('count')[0].value==""){  alert("Invalid value!");}
       
	       else if(parent.getElementsByClassName('count')[0].value<=0 ){
		          alert("Invalid value!");   }
				  
				  else if(parent.getElementsByClassName('count')[0].value>101 ){
		          alert("Invalid value max=100!");   }	  
	   else{
	   
	      
	   
 
	  if(isInteger(parseFloat(parent.getElementsByClassName('count')[0].value))==true){ 
    
          
		    var title = parent.getElementsByClassName('title')[0].innerHTML;
            var image = parent.getElementsByClassName('image')[0].innerHTML;
			var weight =parent.getElementsByClassName('weight')[0].innerHTML;
			var tcount =parent.getElementsByClassName('tcount')[0].innerHTML;
			var price = parseFloat(parent.getElementsByClassName('price')[0].innerHTML);
            var oprice =parseFloat(parent.getElementsByClassName('oprice')[0].innerHTML);
			var count = parseInt(parent.getElementsByClassName('count')[0].value);
			index=[title,image,weight,tcount,price,oprice,count];
			
			if(localStorage.length!=0){
			for (var j=0; j < localStorage.length; j++) {
             var arr =JSON.parse(localStorage.getItem(localStorage.key(j))); 
			var v1=arr[2];
			var v2=arr[3];
		  if(v1==weight && v2==tcount )
		  {    arr[6]+=count;
			   localStorage.setItem(j,JSON.stringify(arr));
	           i++;
			   break;
		  }
          else{
			    i++;
	          localStorage.setItem(i,JSON.stringify(index));
			  break;
              }			
		  } 	
		}
        else{ 
			 localStorage.setItem(i,JSON.stringify(index));
			  i++;
			
		}		
			
	  } 
	  else{
		alert("Invalid value!"); 
           }
	   }
       

    }
function isInteger(num) {
  return (num ^ 0) === num;
}

        function goToo(){
        window.location.href="index.php?id=basket";          
        }

        function Clear(){
        localStorage.clear();
        alert("Содержимое корзины очищено!");
        location.reload();
        }


function Basket(){
	  var sum=0.0;	
      var txt=[];
      var tbody = ''; 
      var theader= '<table class="table table-striped table-bordered table-hover">\n  <caption>'
     +'<h1>Ваш заказ :</h1></caption><tr > '
     +'<th>Наименование</th>'
     + '<th>Изображение</th>'
     + '<th>Объем,грамм</th>'
     + '<th>Кол-во единиц в упаковке</th>'
     + '<th>Цена оптовая  за единицу в гривнах, без НДС</th>'
     + '<th>Цена оптовая упаковки в гривнах, без НДС</th>'
     + '<th>Количество</th>'
     //+ '<th></th>'
     +'</tr>'   ;
      for (var i=0; i < localStorage.length; i++) {
          txt =JSON.parse(localStorage.getItem(localStorage.key(i))); 

          tbody += '<tr>';
            for( var k=0; k<7; k++)
            {
            tbody += '<td>';
            tbody += txt[k];
            tbody += '</td>'
            }
	var price=txt[4];
	var count=txt[6];
    sum+= parseFloat(price)*parseInt(count);
    tbody += '</tr>\n';
 }  
var sumtr='';
sumtr+='<tr><td colspan=7  ><b> ВСЕГО: ' ;
sumtr+=sum;
sumtr+=' грн. </b> </td> </tr>';
var tfooter='</table>'; 
var b1=' <input type="button" onClick="Form()" value="Оформить заказ"/>    '
var b2=' <input type="button" onClick="Clear()" value="Очистить корзину"/> '   

     
document.getElementById('basket').innerHTML = theader+tbody+sumtr+tfooter+b1+b2;
}
 
      function Form(){
	
		  if(localStorage.length==0) alert("Корзина пуста! Незовможно оформить заказ!");
		  else{
		  document.getElementsByClassName('formmodal')[0].style.display="block";   }
      }
          function FormClose(){
        document.getElementsByClassName('formmodal')[0].style.display="none";   
      }






        



      
   


        
        
