<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>............</title>
</head>
<body>

    <div id="data_js">
        Hello
    </div>

    <button onclick="data_change">
        Click
    </button>


    <script>
        function data_change() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("data_js").innerHTML = this.responseText;
                }
            xhttp.open("GET", "ajax_info.txt", true);
            xhttp.send();
        }
    </script>
    
</body>

</html>