<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font -->
       <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="css/rowgrid.css">
        <link rel="stylesheet" href="gridstack/gridstack.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        

        <style type="text/css">
        .grid-stack {
            background: lightgoldenrodyellow;
            margin: auto;
        }

        .grid-stack-item-content {
            border: 1px solid black;
            background-color:  red;
        }
        .grid-stack-item-content:active{
            /*background-color:  yellow;*/
             transform: scale(1.1,1.1);
        }
        .container{height: 100%;}
        .row-header{height: 10%;}
        .row-body{height: 90%;}
        .row-menu{height: 70%;}
        .row-options{height: 30%;}
        .row-basket{height: 60%;}
        .row-calc{height: 40%;}
        .row{border: 1px solid #ccc;overflow: auto;}
    </style>

    </head>
    <body>
    <div class="container-fixed">
        <div class="row row-header">
            header
        </div>
        <div class="row row-body">
            <div class="col col-xs-4">
                <div class="row row-basket">basket</div>
                <div class="row row-calc">calc</div>
            </div>
            <div class="col col-xs-8">
                <div class="row row-menu">
                    <div class="grid-stack"></div>
                </div>
                <div class="row row-options">options</div>
            </div>
            
        </div>
    </div>
    
    {{-- <div class="container-fixed">
        <div class="row row-xs-1">
            <div class="col col-xs-12">North</div>
        </div>
        <div class="row row-xs-8">
            <div class="col col-xs-4">West</div>
            <div class="col col-xs-8">
                <div class="grid-stack">
                    
                </div>
            </div>
        </div>
        <div class="row row-xs-3">
            <div class="col col-xs-4">calc</div>
            <div class="col col-xs-8">option</div>
        </div>
    </div> --}}
    </body>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lodash.min.js"></script>
    <script src="gridstack/gridstack.js"></script>
    <script src="gridstack/gridstack.jQueryUI.js"></script>
    <script type="text/javascript">
        var items = {!!json_encode($itemse)!!} 
    </script>
    <script type="text/javascript" src="js/mainpos.js"></script>
</html> 
