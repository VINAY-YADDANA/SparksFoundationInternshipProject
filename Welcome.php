<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bank{
        font-size:35px;
        float:center;
        padding:24px;
        color:Blue;
    }

    .row{
        margin-top:24px;
        padding:36px;
    }

    .users{
    float: left;
    width: 33.33%;
    padding: 5px;
    }
    
    .transaction{
    float: right;
    width: 33.33%;
    padding: 5px;
    }
    
    a{
    float:center;
    background-color: white;
    color: slateblue;
    padding: 15px 25px;
    font-size:48px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    </style>
</head>
<body>
<div class="bank" align=center >BANK OF HINDUSTAN</div>
<img src="bg.jpeg">
<div class="row">
    <div class="users">
        <img src="users1.jpg" width=400px height=360px><br>
        <a href="UserList.php">USER ACCOUNT DETAILS</a>
    </div>
    <div class="transactions" align=right >
        <img src="moneytransfer.jpg" width=500px height=360px><br>
        <a href="Transaction_history.php">LIST OF TRANSACTIONS</a> 
    </div>
</div>
</body>
</html>