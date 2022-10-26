<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<button id="showData"><h2>View the data</h2></button>
<div id="table-container"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).on('click','#showData',function(e){
      $.ajax({    
         type: "GET",
         url: "backend-script.php",             
         dataType: "html",                  
         success: function(data){                    
            $("#table-container").html(data); 
            
         }
   });
   });

</script>

<style>
   button {
      background: black;
	  
   }
   button:hover {
     background-color: green;
   }
   p , button {
     color: white;
	 font-size: 15px;
   }   
</style>
</html>
</head>

