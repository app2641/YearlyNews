

Ext.Loader.setConfig({
    enabled: true,
    paths: {
        'Ext': '/resources/js/extjs/4.1.1/src',
        'Ext.ux': '/src/ux',
        'NEWS': '/src/app'
    }
});


Ext.direct.Manager.addProvider(NEWS.REMOTING_API);
Ext.application({
    controllers: NEWS.Controllers,
    launch: function () {

        if (Ext.get('render-list-container')) {
            Ext.create('NEWS.view.index.EntryList', {
                renderTo: 'render-list-container'
            });
        }

    }
});


