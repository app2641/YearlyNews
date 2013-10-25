

Ext.ns('NEWS');

Ext.Loader.setConfig({
    enabled: true,
    paths: {
        'Ext': '/ext/src',
        'Ext.ux': '/src/ux',
        'NEWS': '/src/auth'
    }
});


// Ext.direct.Providerの設定
Ext.direct.Manager.addProvider(NEWS.REMOTING_API);

Ext.application({
    controllers: NEWS.Controllers,
    launch: function () {
        // Elがあるかどうか
        if (Ext.get('auth-login-container')) {
        }
    }
});

