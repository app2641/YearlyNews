

Ext.Loader.setConfig({
    enabled: true,
    paths: {
        'Ext': '/ext/src',
        'Ext.ux': '/src/ux',
        'NEWS': '/src/app'
    }
});


Ext.direct.Manager.addProvider(NEWS.REMOTING_API);
Ext.application({
    controllers: [
    ],
    launch: function () {
        var panel = Ext.create('NEWS.view.container.Panel', {
            width: 550,
            height: 400,
            renderTo: 'render-component'
        });
    }
});

