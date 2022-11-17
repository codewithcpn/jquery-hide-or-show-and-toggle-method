<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:pink">
    <div class="container mt-5">
        <h2><b>jQuery: Hide, Show & Toggle Method</b></h2></br>
        <div id="box" class="row">
            <div class="col-md-8 bg-warning  bg-mute border border-2">
                <h1>This is Box</h1>
                <p>This is paragraph tag</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <button class="btn btn-primary" id="hidebtn">Hide</button>
                <button class="btn btn-primary" id="showbtn">Show</button>
                <button class="btn btn-primary" id="togglebtn">Hide/Show</button>
                <p class="text-end text-primary"><b> <span class="text-white">code by</span> - codewithcpn</b></p>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#hidebtn').click(function() {
            $('#box').hide(1000, function() {
                console.log("Hidden boox");
            });
        });

        $('#showbtn').click(function() {
            $('#box').show(1000, function() {
                console.log("Show box");
            });
        });
        $('#togglebtn').click(function() {
            $('#box').toggle(1000, function() {
                console.log("Hey toogle");
            });
        });
    });
    </script>

</body>

</html>
