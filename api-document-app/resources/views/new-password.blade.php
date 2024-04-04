<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Reset Password</title>
        <style>
            *{
                font-family: "Roboto", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            .primary {
                background-color: #EF5B25;
                color: #fff;
            }
            .secondary {
                background-color: #F2F2F2;
                color: black;
            }
            .debug {
                border: 1px solid red;
            }
            .btn-menu {
                color: #fff;
                width: 70px;
                height: 70px;
                background-color: transparent;
                list-style: none;
                justify-content: center;
                border-radius: 5px;
                font-size: 14px;
                transition: all 0.3s;
            }
            .btn-menu:hover{
                background-color: #ea9c80;
                width: 70px;
                height: 70px;
                color: #fff;
                transition: all 0.3s;
            }
            .btn-menu:focus{
                background-color: #ea9c80;
                width: 70px;
                height: 70px;
                color: #fff;
            }
            .dropdown{
                color: #000;
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .create-workspace {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-nav-toggle:checked ~ .dropdown-content{
                display: flex;
            }

            .dropdown-menu {
                border: #000 solid 0px;
            }
            .dropdown-item {
                background: #fff;
                color:#000;
                transition: all 0.3s;
            }
            .dropdown-item:hover {
                background: #f2f2f2;
                color:dodgerblue;
                transition: all 0.3s;
            }
            .navbar {
                border-bottom: #F2F2F2 solid 1px;
            }

            .custom-table {
                border-top: #F2F2F2 solid 1px;
                background-color: white;
                transition: all 0.3s;
            }
            .custom-table:hover {
                background-color: #f2f2f2;
                transition: all 0.3s;
            }
            td {
                background-color: transparent;
                color: #000;
            }
            td:hover {
                color: dodgerblue;
            }

            i.fa {
                position: absolute;
                top: 6px;
                left: 10px;
                color: #808080;
                font-size: 16px;
                z-index: 9999;
            }
            .icon {
                position: absolute;
                top: 6px;
                left: 10px;
                color: #808080;
                font-size: 16px;
                z-index: 9999;
            }
            .form-control {
                position: relative;
                padding-left: 30px !important;
            }
            .pane {
                background-color: white;
                border-radius: 5px;
                box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
            }
            .textfield {
                width: auto;
                height: 30px;
                border: 2px solid #F2F2F2;
                border-radius: 5px;
                font-size: 16px;
                padding: 1px;
            }
            .textfield:focus {
                outline: 0;
                border:dodgerblue solid 2px;
                transition: all 0.3s;
            }
            .btn {
                height: 100%;
                width: 100%;
                background: #fff;
                color: #000;
                font-weight: 500;
            }
            .btn:hover {
                background: #f2f2f2;
                color: #000;
                font-weight: 500;
            }
            .btn:focus {
                background: #f2f2f2;
                color: #000;
                font-weight: 500;
            }
            .btn-secondary {
                background: #f2f2f2;
                color: #000;
                font-weight: 500;
                border: #f2f2f2 solid 0px;
            }
            .btn-secondary:hover {
                background: #eeeeee;
                color: #000;
                font-weight: 500;
                border: #f2f2f2 solid 0px;
            }
            .btn-secondary:focus {
                background: #eeeeee;
                color: #000;
                font-weight: 500;
                border: #f2f2f2 solid 0px;
            }
            .btn-primary {
                background: #EF5B25;
                color: #fff;
                font-weight: 500;
                border: #EF5B25 solid 0px;
            }
            .btn-primary:hover {
                background: #d75120;
                color: #fff;
                font-weight: 500;
                border: #ef5b25 solid 0px;
            }
            .btn-primary:focus {
                background: #d75120;
                color: #fff;
                font-weight: 500;
                border: #EF5B25 solid 0px;
            }
            .link-black {
                color: #000000;
                transition: all 0.2s;
                text-decoration: none;
                height: 35px;
                display: flex;
                align-items: center;
            }
            .link-black:hover {
                color: dodgerblue;
                transition: all 0.2s;
                cursor: pointer;
            }
            .link-primary {
                color: #EF5B25;
                transition: all 0.2s;
                text-decoration: none;
                height: 35px;
                display: flex;
                align-items: center;
            }
            .link-primary:hover {
                color: dodgerblue;
                transition: all 0.2s;
                cursor: pointer;

            }
            .link-grey {
                color: #808080;
                transition: all 0.2s;
                text-decoration: none;
                height: 35px;
                display: flex;
                align-items: center;
            }
            .link-grey:hover {
                color: dodgerblue;
                transition: all 0.2s;
                cursor: pointer;
            }
            .line {
                width: 100%;
                height: 1px;
                background-color: #808080;
                margin: 0 0px;
            }
            .cursor {
                cursor: pointer;
            }
            .checkbox {
                position: relative;
                overflow: hidden;
            }

            .checkbox__input {
                position: absolute;
                top: -100px;
                left: -100px;
            }

            .checkbox__inner {
                display: inline-block;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                border: 2px solid #eeeeee;
                background: transparent no-repeat center;
            }

            .checkbox__input:checked + .checkbox__inner {
                border-color: #EF5B25;
                background-color: #EF5B25;
                background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='14px' height='10px' viewBox='0 0 14 10' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3C!-- Generator: Sketch 59.1 (86144) - https://sketch.com --%3E%3Ctitle%3Echeck%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='ios_modification' transform='translate(-27.000000, -191.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cg id='Group-Copy' transform='translate(0.000000, 164.000000)'%3E%3Cg id='ic-check-18px' transform='translate(25.000000, 23.000000)'%3E%3Cpolygon id='check' points='6.61 11.89 3.5 8.78 2.44 9.84 6.61 14 15.56 5.05 14.5 4'%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                background-size: 14px 10px;
            }
        </style>
    </head>
    <body class="overflow-hidden">
        <div class="row">
            <div class="col primary d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
                <div class="d-flex flex-column align-items-center">
                    <label class="mb-2" style="font-size: 64px; font-weight: 500;">Welcome Back</label>
                    <p class="mb-5" style="font-size: 32px; font-weight: 300">API Documentation & Design Tools</p>
                </div>
                <div>
                    <img style="border-radius: 100%;" src="https://cdn.discordapp.com/attachments/994685233087643719/1217123237176152244/4579502.jpg?ex=6602e158&is=65f06c58&hm=a943c0da042e95d7de8aa002260be016ea51314ab6b9d9d524419c5ec8a17095&" alt="" width="460px" height="460px">
                </div>
            </div>
            <div class="col">
                <div class="header mt-2 ms-2">
                    <img src="https://cdn.discordapp.com/attachments/994685233087643719/1217121151285985350/clicknext_logo.png?ex=6602df67&is=65f06a67&hm=9b903fcb7daa77f74eb6166e5ecf0b998078316cf21d431e1dad8a376caa6082&" alt="" width="155px">
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="alert alert-error" role="alert">
                    {{Session::get('error')}}
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <form action="{{ route('reset.password.post') }}" method="POST" class="body d-flex flex-column justify-center align-items-center needs-validation" style="width: auto; margin-top: 20%;" novalidate>
                        @csrf
                        <input type="text" name="token" hidden value="{{$token}}">

                        <label for="" class="mb-4" style="font-size: 32px;">EmailAddress</label>
                        <div class="input-group mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16" width="16" height="16"><path d="M4 4a4 4 0 0 1 8 0v2h.25c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0 1 12.25 15h-8.5A1.75 1.75 0 0 1 2 13.25v-5.5C2 6.784 2.784 6 3.75 6H4Zm8.25 3.5h-8.5a.25.25 0 0 0-.25.25v5.5c0 .138.112.25.25.25h8.5a.25.25 0 0 0 .25-.25v-5.5a.25.25 0 0 0-.25-.25ZM10.5 6V4a2.5 2.5 0 1 0-5 0v2Z"></path></svg>
                            <input class="textfield form-control" style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="email" name="email" id="email"  placeholder="Enter your new email" required>
                            <div class="invalid-feedback">Please fill your new password.</div>
                        </div>

                        <label for="" class="mb-4" style="font-size: 32px;">Reset account password</label>
                        <div class="input-group mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16" width="16" height="16"><path d="M4 4a4 4 0 0 1 8 0v2h.25c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0 1 12.25 15h-8.5A1.75 1.75 0 0 1 2 13.25v-5.5C2 6.784 2.784 6 3.75 6H4Zm8.25 3.5h-8.5a.25.25 0 0 0-.25.25v5.5c0 .138.112.25.25.25h8.5a.25.25 0 0 0 .25-.25v-5.5a.25.25 0 0 0-.25-.25ZM10.5 6V4a2.5 2.5 0 1 0-5 0v2Z"></path></svg>
                            <input class="textfield form-control" style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="password" name="password" id="password"  placeholder="Enter your new password" required>
                            <div class="invalid-feedback">Please fill your new password.</div>
                        </div>

                        <div class="input-group mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon me-2 mt-2" viewBox="0 0 16 16" width="16" height="16"><path d="M4 4a4 4 0 0 1 8 0v2h.25c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0 1 12.25 15h-8.5A1.75 1.75 0 0 1 2 13.25v-5.5C2 6.784 2.784 6 3.75 6H4Zm8.25 3.5h-8.5a.25.25 0 0 0-.25.25v5.5c0 .138.112.25.25.25h8.5a.25.25 0 0 0 .25-.25v-5.5a.25.25 0 0 0-.25-.25ZM10.5 6V4a2.5 2.5 0 1 0-5 0v2Z"></path></svg>
                            <input class="textfield form-control" style="padding-left: 40px; height: 45px; width: 100%; border-radius: 5px;" type="password" name="confirm_password" id="confirm_password"  placeholder="Confirm your password" required>
                            <i class="bi bi-eye-slash icon" style="margin-left: 85%; margin-top: 6px;" id="password-icon" onclick="togglePasswordVisibility('password', 'password-icon')">
                                <input type="checkbox" name="" id="password-visibility" class="visually-hidden">
                            </i>
                            <div class="invalid-feedback">Please fill your confirm password.</div>
                        </div>
                        <button class="btn btn-primary" style="font-weight:400; height: 45px;" type="submit">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
             (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                    }, false)
                })
                })()
           function togglePasswordVisibility(inputId, iconId) {
                var checkbox = document.getElementById(inputId);
                var icon = document.getElementById(iconId);
                var passwordField = document.getElementById(inputId);
                if (checkbox.checked) {
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                    passwordField.setAttribute('type', 'password');
                } else {
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                    passwordField.setAttribute('type', 'text');
                }
                checkbox.checked = !checkbox.checked;
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
