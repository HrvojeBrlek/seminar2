    $(document).ready(function() {  
        //Skrivanje svih slika osim prve		
        $("#photos img:gt(0)").hide();  
      
        setInterval(function() {  
            //Prikaz trenutne slike, ako je vidljiva  
            var current = $('#photos img:visible');  
      
            //Prikaz slijedeće slike nakon trenutne, ako postoji, ako ne, ponovo dolazi prva
            var next = current.next().length ? current.next() : $('#photos img:eq(0)');  
            //Skrivanje trenutne slike 
            current.fadeOut(1000);  
            //Prikaz slijedeće slike
            next.fadeIn(1000);  
        }, 3000);  
    });  