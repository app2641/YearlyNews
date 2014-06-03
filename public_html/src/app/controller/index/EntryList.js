/**
 * NEWS.controller.index.EntryList
 *
 * @author app2641
 **/
Ext.define('NEWS.controller.index.EntryList', {

    extend: 'Ext.app.Controller',

    refs: [{
        ref: 'Combo', selector: 'Combobox[id="view-index-year-combo"]'
    }],


    init: function () {
        var me = this;

        me.control({
            // 新規年代作成ウィンドウ表示
            'index-EntryList button[action="new_year"]': {
                click: me.showCreateYearWindow
            },

            // 新規エントリ作成画面遷移
            'index-EntryList button[action="new_entry"]': {
                click: me.showNewEntryPage
            }
        })
    },



    /**
     * 年代新規作成ウィンドウの表示
     *
     * @author app2641
     **/
    showCreateYearWindow: function (btn) {
        var me = this;
        btn.disable();

        Ext.create('NEWS.view.index.CreateYearWindow').show();
        btn.enable();
    },



    /**
     * 新規エントリ画面を表示する
     *
     * @param Button btn  ボタンオブジェクト
     * @return void
     **/
    showNewEntryPage: function (btn) {
        window.open('/entry/new' + location.search);
    }

});
