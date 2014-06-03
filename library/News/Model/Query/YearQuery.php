<?php


namespace News\Model\Query;

use News\Container,
    News\Factory\ModelFactory;

use News\Model\AbstractModel;

class YearQuery implements QueryInterface
{
    protected $db;

    public $column;


    public function __construct ()
    {
        $this->db = \Zend_Registry::get('db');

        $container = new Container(new ModelFactory);
        $this->column = $container->get('YearColumn');
    }



    /**
     * レコードを新規作成する
     *
     * @author app2641
     **/
    public final function insert (\stdClass $params)
    {
        try {
            foreach ($params as $key => $val) {
                if (! in_array($key, $this->column->getColumns())) {
                    throw new \Exception('invalid column '.$key);
                }
            }

            $sql = 'INSERT INTO year
                (name) VALUES (:name)';

            $this->db->state($sql, $params);

        } catch (\Exception $e) {
            throw $e;
        }

        return $this->fetchById($this->db->lastInsertId());
    }



    /**
     * レコードを更新する
     *
     * @author app2641
     **/
    public final function update (AbstractModel $model)
    {
        try {
            $record = $model->getRecord();

            foreach ($record as $key => $val) {
                if (! in_array($key, $this->column->getColumns())) {
                    throw new \Exception('invalid column!');
                }
            }

        } catch (\Exception $e) {
            throw $e;
        }
    }



    /**
     * レコードを削除する
     *
     * @author app2641
     **/
    public final function delete (AbstractModel $model)
    {
        try {
        
        } catch (\Exception $e) {
            throw $e;
        }
    }



    public final function fetchById ($id)
    {
        try {
            $sql = 'SELECT * FROM year
                WHERE year.id = ?';

            $result = $this->db->state($sql, $id)->fetch();
        
        } catch (\Exception $e) {
            throw $e;
        }

        return $result;
    }



    /**
     * 指定年代のレコードを取得する
     *
     * @param string $year  年代名
     * @author app2641
     **/
    public function fetchByName ($name)
    {
        try {
            $sql = 'SELECT * FROM year
                WHERE year.name = ?';

            $result = $this->db
                ->state($sql, $name)->fetch();
        
        } catch (\Exception $e) {
            throw $e;
        }

        return $result;
    }



    /**
     * 全レコードを取得する
     *
     * @author app2641
     **/
    public function fetchAll ()
    {
        try {
            $sql = 'SELECT * FROM year';

            $results = $this->db->state($sql)->fetchAll();
        
        } catch (\Exception $e) {
            throw $e;
        }

        return $results;
    }
}
