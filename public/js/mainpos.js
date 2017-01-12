$(function () {
    var options = {
        float: true,
        height: 11,
        cell_height: '5rem',
    	vertical_margin: 5,
    	animate: true,
    	alwaysShowResizeHandle: true,

    };
    $('.grid-stack').gridstack(options);
    console.log(items);


    this.grid = $('.grid-stack').data('gridstack');

    this.addNewWidget = function (item){
        this.grid.addWidget($('<div class="grid-stack-item"><div class="grid-stack-item-content" >' + item.name +'</div></div>'),
            item.x, item.y, item.width, item.height);
        return false;
    }.bind(this);

    items.forEach(this.addNewWidget);

    //this.grid.disable();


});