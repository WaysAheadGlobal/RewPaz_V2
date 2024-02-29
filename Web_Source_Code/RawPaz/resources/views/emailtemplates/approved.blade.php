<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body style="margin: 20px auto; padding: 0; box-sizing: border-box; font-family: 'Montserrat';background: #f2f2f2;">
    <div style="width: 100%; max-width: 600px; margin: auto; background-color: #fff; height: auto; min-height: auto;">
        <div> <img src="{{asset('assets/images/img1.png')}}" alt=""></div>
        <div style="padding: 0 65px;">
            <!-- <p style="font-weight: 400;font-size: 16px;line-height: 164.4%;color: #000000;margin: 0;">,</p>
            <p style="font-weight: 400;font-size: 16px;line-height: 164.4%;color: #000000;margin-bottom: 0;"> Please Verify your Account.</p> -->
            <p style="font-weight: 400;font-size: 16px;line-height: 164.4%;color: #000000;margin-bottom: 0;"> <strong style="font-size: 26px">{{$msg}}</strong></p><br><br>
            <p style="font-weight: 400;font-size: 12px;line-height: 164.4%;"><a href="RewPaz.waysdatalabs.com"
                    style="font-family: 'Montserrat';font-style: italic;font-weight: 500;font-size: 12px;letter-spacing: 0.05em;color: #25276C;text-decoration: none;line-height: 15px;">RewPaz</a>
            </p>
        </div>
        <div style="padding: 0 65px;">
        </div>
        <div style="padding: 0 65px;display: flex;align-items: center;margin-top: 30px;"> <span><img
                    src="https://rewpaz.waysdatalabs.com/assets/images/logo.png" alt=""></span><span style="margin-left: 20px;">8920 WOODBINE AVENUE 304
MARKHAM, ON, CA, L3R 9W9</span></div>
        <div style="display: flex;align-items: center;justify-content: space-between;">
            <div style="margin: 0 20px 20px;"><img src="image/ic.png" alt=""> </div>
            <div style="text-align: right;line-height: 0;"><img src="{{asset('assets/images/img2.png')}}" alt=""></div>
        </div>
    </div>
</body>

</html>