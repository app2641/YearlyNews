<?php


namespace News\Model\Column;

class MonthColumn implements ColumnInterface
{
    protected
        $columns = array(
            'id',
            'ja',
            'en'
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
