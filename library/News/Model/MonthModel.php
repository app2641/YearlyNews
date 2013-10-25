<?php


namespace News\Model;

use News\Container,
    News\Factory\ModelFactory;

class MonthModel extends AbstractModel
{
    public $query;


    public function __construct ()
    {
        $container = new Container(new ModelFactory);
        $this->query = $container->get('MonthQuery');
    }
}
