<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        *{
            background-color:;

        }
        form{
            justify-content: center;
            align-items: center;
            display: grid;
        }
    </style>
    
    
</head>
<body>
<h1>BMI Calculator</h1>

    
    <form action="" method="POST" class="">
        <label for="fname"> Nick Name :
            <input name="name" class="" type="text"  placeholder="Your Name" id="fname">
        </label><br>

        <label for="age">  Age :
            <input name="age" class="" input type="number" step="0.01" placeholder="Your Age" id="age">
        </label><br><br>

        <label for="country"> Country :
            <input name="country" class="" type="text" placeholder="Country You live in" id="country">
        </label><br>

        <label for="height"> Height :
            <input name="height" class="" input type="float" step="0.01" placeholder="Your Height in Foot" id="height" required>
        </label><br>

        <label for="weight"> Weight :
            <input name="weight" class="" input type="number" step="0.01" placeholder="Your Weight in KG" id="weight" required>
        </label><br>

        <button name="submit" type="submit" class="btn" >Submit</button>


        <?php 

        if(isset($_POST['submit'])){
            $name= $_POST['name'];
            $age= $_POST['age'];
            $country=$_POST['country'];
            $height=(float)$_POST['height'];
            $weight=(float)$_POST['weight'];
            $foot1_in_meter=0.3048;
            $height_in_meters = ($foot1_in_meter * $height);
            $BMI=$weight/$height_in_meters**2;
            
            if( $BMI>=18.5 && $BMI<24.99){
                echo("<h1>Congratulation! You Are at Normal Weight</h1>");
            }elseif($BMI>=25 && $BMI<29.99){
                echo("<h1>You Are at excess weight</h1>");
            }elseif($BMI>=30 && $BMI<34.99){
                echo("<h1>You are at the First Stage of over Weight</h1>");
            }elseif($BMI>=35 && $BMI<39.99){
                echo("<h1>You are at the Second stage of over weight</h1>");
            }elseif($BMI>=40){
                echo("<h1>Oh No! You are at the third stage of over weight</h1>");
            }else{
                echo("You are at under age");
            }
        }
        ?> 
       





        <!-- <button type="submit" class="btn" onclick="openPopup()">Submit</button>


        <div class="popup" id="popup">
            <img class="gifpop" src="lol1.gif" alt="">

            <h2 id="greet"></h2>
            <h1>You have successfulli registered in this site.Thanks!</h1>

            <button type="button" class="okbtn" onclick="closePopup()">OK</button>
        </div>
        
        <script>
            let popup = document.getElementById("popup");

            function openPopup(){
                popup.classList.add("open-popup");
                var name = document.getElementById("fname").value;
                document.getElementById('greet').innerText = 'Congratulations.!  ' + name;
            }
            function closePopup(){
                popup.classList.remove("open-popup");
            }
        </script> -->
    </form>
    
</body>
</html>