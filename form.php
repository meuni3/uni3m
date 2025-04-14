<DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <link rel="disgnAcount" href="disgnAcount.css">
    <script src="https://kit.fontawesome.com/4fa9a42824.js" crossorigin="anonymous"></script>
    <style>
        body{
    height: 300vhvh;
    width: 100%;
    background:linear-gradient(#191e29,#132d46);
    background-size: 300% 300% ;
    align-items: center;
    justify-content: center;
    text-align: center;

}
h2{
    color: white;
}
form{
    width: 100%;
    max-width: 600px;
    text-align: center;
    margin:0 auto ;
}
.input-group{
    margin-bottom: 30px;
    position: relative;
    color: white;
}
input, textarea{
    width: 100%;
    padding: 10px;
    outline: 0;
    border: 1px solid #fff;
    color: #fff;
    background: transparent;
    font-size: 15px;
}
label{
    height: 100%; 
    position: absolute;
    left: 0;
    top: 0; 
    padding: 10px;
    color: #fff;
    cursor: text;
    transition: 0.2s;
}
button{
    padding: 10px 0;
    color: #fff;
    outline: none;
    background: transparent;
    border: 1px solid #fff;
    width: 100%;
    cursor: pointer;
}
input:focus~label,
input:valid~label,
textarea:focus~label,
textarea:valid~label{
    top: -35px;
    font-size: 14px;
}
Table {
  width: 100%;
  border-collapse: collapse;
  text-align: center;
    margin:0 auto ;

}

th , tr , td{
  border: 1px solid #ddd;
  padding: 5px;
}

th , tr , td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;

}

 tr , td {
    border: 1px solid #ddd;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: dimgrey;
  color: white;
}

select{
  background-color: white;
  width: 100%;
  border-width: 1px;

}
.A{
    width: 100%;
    border-width: 2px;
    border-style:solid;
    border-color:white;
}
.B{
    width: 100%;
}
    </style>
    <script src="script.js"></script>
</head>
<body>

<form method="POST" action="add.php">
    <br><br><br><br>
<h2>ACCOUNT</h2>
    <div class="input-group">
        <input type="input" id="account"  name="account"  required>
        <label for="email"><i class="fa-solid fa-envelope-open"> </i> Your Account Discord</label>
    </div>
    <div class="input-group">
        <input type="number" id="playerLevel" name="PlayerLevel" min="1" max="100" required />
        <label for="playerLevel"><i class="fa-solid fa-turn-up"></i>Player Level</label>
    </div>
    <div class="A">
    <div class="input-group">
    <label for="gameName"><i class="fa-solid fa-gamepad"></i> GameName</label>
    <br><br>
            <select class="select" name="GameName" >
                <option>PUBG</option>
                <option>Code in Duty</option>
                <option>FIFA</option>
                <option>Fortnite</option>
            </select>
        </div>
        </div>
        <br><br><br>
    <div class="input-group">
        <textarea id="message" name="YourBio" rows="8" required></textarea>
        <label for="message"> <i class="fa-solid fa-comments"></i> Your Bio </label>
    </div>
    <button type="submit" class="B"> SUBMIT <i class="fa-solid fa-paper-plane"></i> </button>
<br><br><br><br>

    </form>
</body>
</html>