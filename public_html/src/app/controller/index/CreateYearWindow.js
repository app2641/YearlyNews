/**
 * NEWS.controller.index.CreateYearWindow
 *
 * @author app2641
 **/
Ext.define('NEWS.controller.index.CreateYearWindow', {

    extend: 'Ext.app.Controller',

    refs: [{
        ref: 'Form', selector: 'index-CreateYearWindow form'
    }],


    init: function () {
        var me = this;

        me.control({
            'index-CreateYearWindow textfield[name="year"]': {
                afterrender: function (field) {
                    field.focus(true, 300);
                }
            },


            'index-CreateYearWindow button[action="cancel"]': {
                click: function (btn) {
                    btn.up('window').close();
                }
            },


            'index-CreateYearWindow button[action="submit"]': {
                click: me.submit
            }
        });
    },



    /**
     * フォーム送信処理
     *
     * @author app2641
     **/
    submit: function (btn) {
        var me = this,
            form = me.getForm();

        if (form.getForm().isValid()) {
            btn.disable();

            form.getForm().submit({
                success: function (form, response) {
                    btn.up('window').close();
                },
                failure: function (form, response) {
                    btn.enable();

                    Ext.Msg.show({
                        title: 'Caution!',
                        msg: response.result.msg,
                        icon: Ext.Msg.ERROR,
                        buttons: Ext.Msg.OK
                    });
                }
            });
        }
    }

});
