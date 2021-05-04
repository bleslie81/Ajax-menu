<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        var xhttp;

        if(window.XMLHttpRequest){
            xhttp = new XMLHttpRequest();
        }
        else
        {
           xhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        function csere(tartalom){
            var date=new Date();

            xhttp.open("GET",tartalom+".html?ido="+date,true);

            xhttp.onreadystatechange = function() {
                //ha az állapota az objektumnak megváltozott
                if (this.readyState == 4) {
                    //ha sikerül a beolvasás
                    document.getElementById("container").innerHTML=this.responseText;
                    //válaszsszöveget megkapjuk
                    console.log("3");
                }
            };

            xhttp.send(null);
        }

    </script>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="#">AJAX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item p-3">
                        <a class="nav-link" href="javascript:csere(1)">Laravel</a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="javascript:csere(2)">JavaScript</a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="javascript:csere(3)">Node JS</a>
                    </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Keresés</button>
            </form>
        </div>
    </nav>

    <div id="container"></div>
</body>
</html>