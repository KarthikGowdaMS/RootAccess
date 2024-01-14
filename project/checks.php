<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <title>signup</title>
    <style>
        body {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-image: url('WhatsApp Image 2024-01-04 at 12.30.01_15a298df.jpg');
    background-size: 100%; 
    background-position: center; 
    background-repeat: no-repeat;
}

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        img {
            width: 150px;
            height: auto;
            margin: 10px;
        }
        .link-button {
            width: 150px;
            height: 40px;
            border-radius: 20px;
            transition: background-color 0.3s, color 0.3s;
            background-color: transparent;
            color: #3498db;
            border: none;
            cursor: pointer;
        }
        .link-button:hover {
            background-color: #000;
            color: #fff;
        }
        .doctor1-button {
            background-color: #000 !important;
            color: #fff !important;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 30%;
        }
        .call-symbol
        .video-call-symbol {
            margin-left: 5px;
            font-size: 18px;
        }
        .btn-book {
            background-color: #c8e6c9 !important;
            color: #03a9f4 !important;
        }
        .btn-book:hover {
            background-color: #388e3c !important;
        }

        .btn.btn-primary.link-button {
            background-color: white;
            border: 2px solid black;
            border-color: black;
        }

        .btn.btn-primary.link-button:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 1">
        <button class="link-button doctor1-button" href="doctor.php">Client 1</button>
    </div>
    <div class="form-container">
        <h1 class="mb-4">Client 1</h1>
        <form>
            <div class="button-container">
                <a class="btn btn-primary link-button" href="accepts.php">Accept</a>
            </div>
            <div class="button-container">
                <a class="btn btn-primary link-button" href="find.php">Decline</a>
            </div>
            <div class="button-container">
                <a class="btn btn-primary link-button" href="find.php">Waiting List<span class="call-symbol"></span></a>
            </div>
            <div class="button-container">
                <a class="btn btn-primary link-button" href="find.php">View Orders<span class="call-symbol"></span></a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
