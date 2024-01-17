<?php
// if(isset($_POST['ajax']) && isset($_POST['name'])){
//     echo $_POST['name'];
//     echo "HJekko";
// }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <div id="aja">
        <h1 id="hh">Enter </h1>
        
        <input type="text" id="id2" value="aa">
        <input type="text" id="id3" value="ab">
        <input type="button" id="submit" onclick="loading()" value="Submit"> </input>
        <a href="fetch.php"> to Fetch </a>
        <p id="para">  Hello</p>
        <div id="divi"></div>
        <div id="div2"></div>
    </div>
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
            $('input').keyup(function(){
                var name=$('#id2').val();
                var email=$('#id3').val();
               var request= $.ajax({
                    url: 'fetch.php',
                    type:'post',
                    data:{ajax:1, name:name},
                    success: function(response){
                       $('#divi').text(name);
                       $('#div2').text(email);
                    }
                    // request.done(function (response){
                    // // alert("ikt worked!");
                    //     $('#divi').text(name);
                    //     $('#div2').text(email);
                    //     alert("ikt worked!");
                    //   });
                });


            })

        // var request=$.ajax({
            
        });

    //     });
    //    $a=('#id4').val();
    //     request.done(function (response, textStatus, jqXHR){
    //         // alert("ikt worked!");
    //     $("#id3").html($a);
    //     // alert("ikt worked!");
    // });
    // request.fail(function (){
        
    //     alert(
    //         "The following error occurred: "+
    //         textStatus, errorThrown
    //     );
    // });
    //     }
        

    </script>
</body>
</html>