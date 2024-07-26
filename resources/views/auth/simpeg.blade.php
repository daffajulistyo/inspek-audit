<!DOCTYPE html>

<html lang="en">

<head>

    <title>Login SIMPEG Pasaman</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport"
        content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes">

    <meta name="description" content="SIMPEG BKD SUMBAR">

    <meta name="author" content="BKD SUMBAR">

    <meta name="keywords"
        content="Simpeg, Simpeg BKD, Simpeg BKD Sumbar, Aplikasi Simpeg Sumbar, Sumatera Barat, Sumbar, Pemprov Sumbar, Pemprov, BKD SUmbar, BKD, Yogi Kaputra, Yogi, yogi, yogi kaputra, Yogi Solop, yogi solop" />

    <link rel="stylesheet" href="{{ asset('bootstrap/css/simpeg.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

</head>

<body class="focusedform">

    <div class="verticalcenter">
        <h1 style="text-align:center;"><b style="color:#c00;">AUDIT</b> INSPEKTORAT</h1>

        <h3 style="text-align:center;margin-top:-20px;">Kabupaten Pasaman</h3>

        <div class="panel panel-primary">

            <div class="panel-body">

                <h4 class="text-center" style="margin-bottom: 25px;">Silahkan Login </a></h4>



                <div class="form-group">

                    <div class="col-sm-12">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-user"></i></span>

                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username" value="">

                        </div>

                    </div>

                </div>
<br>
                <div class="form-group mt">

                    <div class="col-sm-12">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">

                        </div>

                    </div>

                </div>

                <?php if (isset($captcha_img)) {
                    echo $captcha_img;
                } ?>

            </div>

            <div class="panel-footer">

                <div class="pull-right">

                    <input type="reset" name="reset" class="btn btn-default" value="Reset">

                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Log In">

                </div>

            </div>


        </div>

    </div>



    <script src="{{ asset('bootstrap/js/simpeg.js') }}"></script>



    <script type="text/javascript">
        $(function() {

            $('#submit').on('click', function() {

                $(this).val("Mencoba Login...");

                $(this).addClass('disabled');

                $('#form-login').submit();

            });

        });
    </script>



</body>

</html>
