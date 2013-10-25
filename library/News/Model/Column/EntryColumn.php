<?php


namespace News\Model\Column;

class EntryColumn implements ColumnInterface
{
    protected
        $columns = array(
            'id',
            'year_id',
            'month_id',
            'title',
            'url',
            'site_name',
            'archive_url',
            'day',
            'draft',
            'publish'
        );


    /**
     * テーブルのカラム情報を取得する
     *
     * @author app2641
     **/
    public function getColumns ()
    {
        return $this->columns;
    }
}
