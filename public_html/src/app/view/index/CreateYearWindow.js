/**
 * NEWS.view.index.CreateYearWindow
 *
 * @author app2641
 **/
Ext.define('NEWS.view.index.CreateYearWindow', {

    extend: 'Ext.window.Window',

    alias: 'widget.index-CreateYearWindow',


    title: '年代の新規作成',
    modal: true,


    initComponent: function () {
        var me = this;

        me.items = [];
        me.buildForm();

        Ext.apply(me, {
            buttons: [{
                text: 'キャンセル',
                action: 'cancel'
            }, {
                text: '作成',
                action: 'submit'
            }]
        });

        me.callParent(arguments);
    },



    /**
     * フォームを構築する
     *
     * @author app2641
     **/
    buildForm: function () {
        var me = this;

        me.items.push({
            xtype: 'form',
            api: {
                submit: Year.create
            },
            items: [{
                xtype: 'textfield',
                name: 'year',
                fieldLabel: '年代',
                allowBlank: false,
                anchor: '100%',
                width: 400
            }],
            border: false,
            bodyStyle: 'padding: 20px;'
        });
    }

});
