$(document).ready(function(){
    
    
    
    $(".prihvati").click(prihvati);
    
    //poziva php metodu za odobravanje teksta
    function prihvati(){
        var index=$(this).data("index");
        var parametar=parametri[index];
        $.ajax({
            type: 'get',
            url: baseURL+"/prihvati/"+parametar,
            success:function(){
                proveriZahteve();
            }
        });
    }
    
    $(".odbij").click(odbij);
    
    //poziva php metodu za odbacivanje teksta
    function odbij(){
        var index=$(this).data("index");
        var parametar=parametri[index];
        $.ajax({
            type: 'get',
            url: baseURL+"/odbij/"+parametar,
            success:function(){
                proveriZahteve();
            },
            error: function(response){
                alert(response);
                console.log(response);
            }
        });
    }
    
 function proveriZahteve(){
        $.ajax({
            type: 'get',
            url: baseURL+"/zahtevikorisnika/"+parametar1,
            success: function(response){
                
                $(".prihvati").click(prihvati);
                $(".odbij").click(odbij);
            }
        });
    };  
    
   
    
    
});
