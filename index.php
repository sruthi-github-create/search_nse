<!DOCTYPE html>
<html>

<head>
    <title>NSE Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Including jQuery is required. -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Including CSS file. -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <div class="container">

        <div class="col-md-12 main_section">
            <h1 class="title">Stocks<h1>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">search</span>
            <input type="text" class="form-control" id="search" placeholder="Search" aria-label="searc"
                aria-describedby="basic-addon1">
        </div>

        <br />
        <!-- Suggestions will be displayed in below div. -->
        <div class="para" id="display"></div>
        </<div>

    </div>
</body>

</html>