<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

    </style>

    <style>
        .welcome-h1 {
            font-weight: 700;
            color: #1e1e1e;
            margin-bottom: 2rem;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .body-div {
            border: rgb(96, 9, 240);
            border: linear-gradient(0deg, rgba(96, 9, 240, 1) 0%, rgba(129, 5, 240, 1) 100%);
            border-style: solid;
            border-width: 10px;
            padding: 5%;
            border-radius: 30px;
            background-color: #EDECED;
        }

        .input {
            border: solid 1.5px;
            border-radius: 10px;
            background: none;
            padding: 10px 20px;
            font-size: 1rem;
            transition: border 150ms cubic-bezier(0.4, 0, 0.2, 1);

            &-group {
                position: relative;
            }

            &:focus,
            &:valid {
                outline: none;
                border: 1.5px solid #1a73e8;
            }
        }

        .input-div {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 300px;
            margin-bottom: 1rem;
        }

        button {
            margin: 10px;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn {
            background: rgb(96, 9, 240);
            background: linear-gradient(0deg, rgba(96, 9, 240, 1) 0%, rgba(129, 5, 240, 1) 100%);
            border: none;
        }

        .btn:before {
            height: 0%;
            width: 2px;
        }

        .btn:hover {
            box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
                -4px -4px 6px 0 rgba(116, 125, 136, .5),
                inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
                inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
        }

    </style>
</head>

<body>
    <div class="body-div">
        <h1 class="welcome-h1">WELCOME TO ATM</h1>
        <div class="input-div">
            <span>Card No: </span> <span>{{ $card_no ?? '' }}</span>
            <div class="input-group">
                <input required type="text" name="text" autocomplete="off" class="input">
            </div>
        </div>
        <div class="input-div">
            <span>PIN : </span> <span>{{ $card_no ?? '' }}</span>
            <div class="input-group">
                <input required type="text" name="text" autocomplete="off" class="input">
            </div>
        </div>

        <div>
            <button class="btn custom-btn" onclick="location.href='{{ url('/home') }}'">SIGN IN</button>
            <button class="btn custom-btn">SIGN UP</button>
        </div>
    </div>
</body>
</html>
