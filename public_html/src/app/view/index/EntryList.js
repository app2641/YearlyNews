/**
 * NEWS.view.index.EntryList
 *
 * @author app2641
 **/
Ext.define('NEWS.view.index.EntryList', {

    extend: 'Ext.grid.Panel',

    alias: 'widget.index-EntryList',


    height: 600,


    initComponent: function () {
        var me = this;

        me.buildStore();
        me.buildColumns();

        me.buildToolbar();

        me.callParent(arguments);
    },



    /**
     * ストアの構築
     *
     * @author app2641
     **/
    buildStore: function () {
        var me = this;

        me.store = Ext.create('Ext.data.Store', {
            fields: ['id', 'month', 'day', 'title', 'draft', 'publish'],
            pageSize: 100,
            proxy: {
                type: 'direct',
                directFn: Entry.getList,
                reader: {
                    root: 'results',
                    totalProperty: 'total'
                }
            }
        });
    },



    /**
     * カラムの構築
     *
     * @author app2641
     **/
    buildColumns: function () {
        var me = this;

        me.columns = [{
            text: 'id',
            dataIndex: 'id',
            flex: 0.5
        }, {
            text: 'month',
            dataIndex: 'month',
            flex: 0.5
        }, {
            text: 'day',
            dataIndex: 'day',
            flex: 0.5
        }, {
            text: 'title',
            dataIndex: 'title',
            flex: 1
        }, {
            text: 'draft',
            dataIndex: 'draft',
            flex: 0.5
        }, {
            text: 'publish',
            dataIndex: 'publish',
            flex: 0.5
        }];
    },



    /**
     * ツールバーの構築
     *
     * @author app2641
     **/
    buildToolbar: function () {
        var me = this,
            combo = me.buildYearCombo();

        me.tbar = [{
            xtype: 'tbtext',
            text: '年月の指定'
        }, combo];
    },



    /**
     * 年指定コンボボックスの構築
     *
     * @author app2641
     **/
    buildYearCombo: function () {
        var store = Ext.create('Ext.data.Store', {
            autoLoad: true,
            fields: ['id', 'value'],
            proxy: {
                type: 'direct',
                directFn: Year.getList
            }
        });


        return {
            xtype: 'combobox',
            store: store,
            forceSelection: true,
            displayField: 'value',
            valueField: 'id',
            editable: false,
            queryMode: 'local',
            width: 300
        };
    }

});
