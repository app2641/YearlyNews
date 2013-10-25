<?php


namespace News\Model\Column;

class YearColumn implements ColumnInterface
{
    protected
        $columns = array(
            'id',
            'name'
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
