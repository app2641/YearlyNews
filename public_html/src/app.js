

Ext.application({
    controllers: NEWS.Controllers,
    launch: function () {
        Ext.create('NEWS.view.Viewport');
    }
});


