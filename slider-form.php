<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Inter";
      background:#04d2c8;
      padding-top:7%;
      
    }

    .container{
        width:30% ;
        min-height:20%;
        background:#fff;
        margin:0px auto;
        padding:1% 0% 2% 0%;
        border-radius:10px;
    }
    label, button {
      font-size: 16px;
      cursor: pointer;
    }

    input, textarea {
      border:3px solid #eee;
      padding: 1em 1em;
      border-radius: 6px;
      resize:none;
    }
     input:focus{
      border:3px solid #04d2c8;
     }
     .container textarea:focus{
      border:3px solid #04d2c8 !important;
     }
    form {
      display: grid;
      grid-row-gap: 10px;
      justify-content: center;
    }

    #button {
      margin-top: 13px;
      background: #04d2c8;
      color: #fff;
      font-size:18px;
      padding: 10px 0;
      border: 0;
      border-radius: 6px;
      width:50%;
    }
    h1{
      position: relative;
      text-align:center;
      margin-bottom:50px;
    }
    .container h1::after{
      content:"";
      position:absolute;
      height:5px;
      width:45%;
      background:#000;
      top:100%;
      left:27%;
     
    }
  </style>
</head>
<body>
    <div class="container">
      <h1>Slider Form</h1>
        <form action="/submit" method="POST" enctype="multipart/form-data">
            <label for="title">Title</label>
            <textarea name="title" id="title"></textarea>
            <label for="sub-title">Sub Title</label>
            <textarea name="sub-title" id="sub-title"></textarea>
            <label for="discript">Discription</label>
            <textarea name="discript" id="discript"></textarea>
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo">
            <input type="submit" value="Send Data" id="button">
        </form>
    </div>
</body>
</html>