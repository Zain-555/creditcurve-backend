<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreditCurve.ai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
 .logo-container {
            text-align: center;
        }

        .logo {
            max-width: 100%;
            height: auto;
            display: inline-block;
            margin: 10px; /* Adjust as needed */
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
        }

        h2 {
            color: #007bff;
        }

        p {
            color: #333333;
            font-size: 16px;
            line-height: 1.5;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .note {
            color: #999999;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
   <!-- <div class="logo-container">
            <img
                loading="lazy"
                sizes="(max-width: 638px) 10vw, (max-width: 998px) 6vw, 5vw"
                src="{{asset('imgs/logo_start.svg')}}"
                class="logo aspect-[1.55] object-contain object-center w-[59px] overflow-hidden shrink-0 max-w-full"
            />
            <img
                loading="lazy"
                sizes="(max-width: 638px) 38vw, (max-width: 998px) 24vw, 17vw"
                             src="{{asset('imgs/logo_end.svg')}}"
                class="logo aspect-[9.92] object-contain object-center w-[238px] fill-sky-500 overflow-hidden self-center my-auto"
            />
        </div>-->
        <h2>Welcome to CreditCurve.ai, {{ $details['username'] }}!</h2>
        <p>
            Thank you for registering with us. Your account is almost ready!


        </p>
        <p class="note">
            Note: Your account will be activated soon. You will receive a confirmation email once the activation process is complete.
        </p>
    </div>
</body>
</html>
