<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contectForm.css">
    <script scr="./js/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container5 " id='contact'>
    <div class="row wrapper">
        <div class="col-lg-7">
            <div class="contact">
                <h1>Contact Us</h1>
                <div class="wrap">
                    <h2>Address :</h2>
                    <h5>India, Gujarat, Deesa<br></h5>
                    <h2>Contact :</h2>
                    <h5>mevadapavan821@gmail.com</h5>
                    <h5>+91 95583 51789</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="contactForm">
                <form action="" method="post">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name"><br>
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email"><br>
                    <label for="msg">Message</label><br>
                    <textarea name="msg" id="msg"  value="Type..." placeholder=Type...></textarea>
                    <button type="submit" id='submit' name='submit'>SUBMIT</button>
                </form>
            </div>
            <!-- <h1 id="error"></p> -->
        </div>
    </div>
</div>
</body>
</html>


<script>

  $(document).ready(function(){
    $('#submit').on('click',function(e){
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var msg = $("#msg").val();
if(name=="" || email == "" || msg == "" ){
    alert("Please Fill Out All Field");
}
else{

    $.ajax({
        url:"insertData.php",
        type:"POST",
        data:{name:name,email:email,msg:msg},
        success:function(data){
            alert("Sent Successfully");
            
        }
    });
}
  })
})
</script>

