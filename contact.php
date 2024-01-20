<!DOCTYPE html>
    <head>
    <title>CONTACT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
    <style>
        body{

           background-color:#423F3E;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            -webkit-text-fill-color: aliceblue;
            font-family:Helvetica;
            font-weight: 10px;
        }

      .div2{
        font-size:20px; 
        -webkit-text-fill-color: aliceblue;
        background-color:#2B2B2B;
       
        width:50%; 
        
        margin: auto;
        width: 50%;
        border: 3px solid white; 
        padding: 10px;
      }

      .error {color: #FF0000;}

      .button {
  background-color:#2B2B2B;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
input{
    background-color: #2B2B2B;
}

textarea{
  background-color:#2B2B2B;
}

input[type=submit]:hover {
  background-color: white;
  -webkit-text-stroke-color: #2B2B2B;
}

input[type=reset]:hover {
  background-color: white;
  -webkit-text-stroke-color: #2B2B2B;
}

input{
  color: red;
}


    </style>
    </head>
<body>

<ul>
        <li  style="font-size: 20px;"><a  href="Music.html">Home</a></li>
        <li style="font-size: 20px;"><a  href="about.html">About</a></li>
        <li style="font-size: 20px;"><a href="Trackss.html">Tracks</a></li>
        <li style="font-size: 20px;"><a  href="Tour.html">Tour</a></li>
        <li style="font-size: 20px;"><a href="index.html">Albums</a></li>
        <li style="font-size: 20px;"><a class="active" href="contact.php">Contact</a></li>

      </ul>

     

      <div class="b1" style="-webkit-text-fill-color: aliceblue; -webkit-text-stroke-color: black; font-size: 60px;">
        <p>CONTACT</p>

        <br><br>
        <div class=div2>
        
        <form method="post" action="connect.php" id="frm1">  
            
            Name: <input type="text" name="name" style="-webkit-text-stroke-color: black" required>
            
            <br><br><br>
            E-mail: <input type="email" name="email"  required>
            
            <br><br><br>
            Contact: <input type="text" name="contact"  required>
            
            <br><br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
            
            <br><br>
            <input type="submit" name="submit" value="Submit" class=button style="color:#2B2B2B" >
            <input type="reset" onclick="myFunction()" class=button style="color:#2B2B2B" value="Reset">
            </form>
    </div>

    </div>

    <script>
     function myFunction() {
       document.getElementById("frm1").reset();
     }
</script>


</body>
</html>