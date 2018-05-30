$(function(){


   $(".complete").click(function(){
     var result= confirm("Are you sure you want to ddd to database ?");

     if(result == true){
       alert("member has been added  successfully");
     }else{
       alert("member insertion was cancelled");
     }
   });


 function submitted(){

  jQuery.ajax({
    url :'/atom/complete/register.php',
    method : 'post',
    data : data,
    success : function(){
       $(".complete").click(function(){
       alert("form has been submitted succesfully");
       });

      //redload the page
      // alert("form submitted succesfully");
    },
    error: function(){
      alert("something went wrong");
    }
  })

}

});
