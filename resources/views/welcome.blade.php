<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="css/rowgrid.css">
        <link rel="stylesheet" href="gridstack/gridstack.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        

        <style type="text/css">
        .grid-stack {
            background: lightgoldenrodyellow;
            height: 100%;
            width: 100%;
        }

        .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #18bc9c;
        }
        
    </style>

    </head>
    <body>
    <div class="container-fixed">
        <div class="row row-xs-1">
            <div class="col col-xs-12">North</div>
        </div>
        <div class="row row-xs-9">
            <div class="col col-xs-4">West</div>
            <div class="col col-xs-8">
                <div class="grid-stack">
                    
                </div>
            </div>
        </div>
        <div class="row row-xs-2">
            <div class="col col-xs-12">South</div>
        </div>
    </div>
    </body>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
    <script src="gridstack/gridstack.js"></script>
    <script src="gridstack/gridstack.jQueryUI.js"></script>
    <script type="text/javascript">
        $(function () {
            var options = {
                float: true,
                resizable: false
            };
            $('.grid-stack').gridstack(options);

            new function () {
                this.items = [
                    {x: 0, y: 0, width: 2, height: 2},
                    {x: 3, y: 1, width: 1, height: 2},
                    {x: 4, y: 1, width: 1, height: 1},
                    {x: 2, y: 3, width: 3, height: 1},
//                    {x: 1, y: 4, width: 1, height: 1},
//                    {x: 1, y: 3, width: 1, height: 1},
//                    {x: 2, y: 4, width: 1, height: 1},
                    {x: 2, y: 5, width: 1, height: 1}
                ];

                this.grid = $('.grid-stack').data('gridstack');

                this.addNewWidget = function () {
                    var node = this.items.pop() || {
                                x: 12 * Math.random(),
                                y: 5 * Math.random(),
                                width: 1 + 3 * Math.random(),
                                height: 1 + 3 * Math.random()
                            };
                    this.grid.addWidget($('<div><div class="grid-stack-item-content" /><div/>'),
                        node.x, node.y, node.width, node.height);
                    return false;
                }.bind(this);

                $('#add-new-widget').click(this.addNewWidget);
                for(var i=0;i<5;i++)this.addNewWidget();
            };

        });
    </script>
</html>
