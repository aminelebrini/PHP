<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #2a2b2bff;
        font-family: Arial, sans-serif;
    }

    .div {
        width: 400px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }


    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        width: 100%;
    }
    .form-container h1{
        color: white;
    }
    .form-container input {
        width: 90%;
        height: 40px;
        padding: 5px 10px;
        font-size: 16px;
    }

    .form-container button {
        width: 90%;
        height: 45px;
        background-color: #0f98dc;
        color: white;
        font-size: 18px;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 5px;
    }

    .form-container button:hover {
        background-color: #1582aa;
    }

    h1 {
        text-align: center;
        margin: 0 0 10px 0;
    }
</style>

<body>

<?php
    $divForm = '
    <div class="div">
        <form class="form-container">
            <h1>FORMULAIRE</h1>
            <input type="text" placeholder="FULL NAME"/>
            <input type="email" placeholder="EMAIL"/>
            <input type="text" placeholder="PHONE"/>
            <button type="submit">SUBMIT</button>
        </form>
    </div>';
echo $divForm;
?>

</body>
</html>
