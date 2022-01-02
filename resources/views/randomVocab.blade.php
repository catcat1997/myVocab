<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Vocab</title>
    <link rel="icon" href="{{ url('css/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <style>
        html {
            font-size: 26px;
            background-image: linear-gradient(to bottom right, rgb(108, 255, 82), rgb(72, 197, 255));
        }
        
        .btn {
            margin: 10px auto;
            width: 80px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 8px;
            background-color: rgb(59, 116, 255);
        }
        
        .big {
            position: relative;
            left: 50px;
            border: 2px solid rgb(26, 26, 26);
            width: 700px;
            height: auto;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .big2 {
            margin: 10px auto;
            
            width: auto;
            height: auto;
            border-radius: 10px;
            overflow: hidden;
        }
    
        .big div {
           
            background-image: linear-gradient(to bottom right, rgb(108, 255, 82), rgb(72, 197, 255));
            padding: 13px;
            border-bottom: 1px solid rgb(26, 26, 26);
        }
        
        .big2 div {
            width: 900px;
            padding: 10px;
            border-bottom: 1px solid rgb(26, 26, 26);
        }
        
        .form {
            width: 400px;
            height: 200px;
            padding: 10px;
            position: absolute;
            border-radius: 15px;
            right: 50px;
            background-image: linear-gradient(to bottom right, rgb(186, 82, 255), rgb(255, 72, 112));
        }
        
        .form .submit {
            margin: 15px 0;
            float: right;
            width: 50px;
            height: 50px;
        }

        .form2 {
            width: 320px;
            height: 100px;
            padding: 10px;
            position: absolute;
            border-radius: 15px;
            right: 50px;
            top: 350px;
            background-image: linear-gradient(to bottom right, rgb(186, 82, 255), rgb(255, 72, 112));
        }
        
        .form2 .submit {
            margin: 15px 0;
            float: right;
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="btn">refresh</div>
    <form method="POST" action="/post" class="form">
        @csrf
        vocab:<input type="text" name="vocab" style="width: 350px; height: 25px;">
        sentence:<input type="text" name="sentence" style="width: 350px; height: 25px;">
        <input type="submit" value="push" class="submit">
    </form>

    <form method="POST" action="/delete" class="form2">
        @csrf
        vocab:<input type="text" name="vocab" style="width: 250px; height: 25px;">
        <input type="submit" value="delete" class="submit">
    </form>
    <!-- <div class="big">
        <div>1. {{$vocab1}}</div>
        <div>2. {{$vocab2}}</div>
        <div>3. {{$vocab3}}</div>
        <div>4. {{$vocab4}}</div>
        <div>5. {{$vocab5}}</div>
    </div>
    <div class="big2">
        <div>1. {{$sentence1}}</div>
        <div>2. {{$sentence2}}</div>
        <div>3. {{$sentence3}}</div>
        <div>4. {{$sentence4}}</div>
        <div>5. {{$sentence5}}</div>
    </div> -->
    <div class="big">
        <div>1. {{$vocab1}}</div>
    </div>
    <div class="big2">
        <div>1. {{$sentence1}}</div>
    </div>
    <div class="big">
        <div>2. {{$vocab2}}</div>
    </div>
    <div class="big2">
        <div>2. {{$sentence2}}</div>
    </div>
    <div class="big">
        <div>3. {{$vocab3}}</div>
    </div>
    <div class="big2">
        <div>3. {{$sentence3}}</div>
    </div>
    <div class="big">
        <div>4. {{$vocab4}}</div>
    </div>
    <div class="big2">
        <div>4. {{$sentence4}}</div>
    </div>
    <div class="big">
        <div>5. {{$vocab5}}</div>
    </div>
    <div class="big2">
        <div>5. {{$sentence5}}</div>
    </div>
    <script>
        let btn = document.querySelector('.btn');
        btn.onclick = function() {
            location.reload();
        }
    </script>
</body>

</html>