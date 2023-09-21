<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$head.title}}</title>
    <meta content="{{$head.description}}" name="description">
    <meta content="{{$head.keywords}}" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/material-icons/material-icons.css" rel="stylesheet">
    <link href="/assets/vendor/classy-countdown/css/jquery.classycountdown.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/main.css?<?php echo filemtime(ROOT_PATH."/assets/css/main.css");?>" rel="stylesheet">
    <script src="/assets/vendor/jquery/jquery-3.6.0.min.js?<?php echo filemtime(ROOT_PATH."/assets/vendor/jquery/jquery-3.6.0.min.js");?>"></script>
</head>

<body>
    {{...}}
    <component name="common.modal.dialog" id="ErrorDialog" centered="true" title="Ошибка" maxwidth="400px" closeBtn="true">
        <div id="ErrorDialogContent" class="modal-body text-danger">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
    </component>

    <component name="common.modal.dialog" id="InfoDialog" centered="true" title="Информация" maxwidth="400px" closeBtn="true">
        <div id="InfoDialogContent" class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
    </component>

    <script>
        function ShowErrorDialog(text) {
            $("#ErrorDialogContent").html(text);
            $("#ErrorDialog").modal("show");
        }

        function ShowInfoDialog(text) {
            $("#InfoDialogContent").html(text);
            $("#InfoDialog").modal("show");
        }
    </script>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/filesize.js"></script>
    <script src="/assets/vendor/jquery/jquery.knob.js"></script>
    <script src="/assets/vendor/jquery/jquery.throttle.js"></script>
    <script src="/assets/vendor/classy-countdown/js/jquery.classycountdown.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js?<?php echo filemtime(ROOT_PATH."/assets/js/main.js");?>"></script>
</body>
</html>