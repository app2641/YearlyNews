<?php


use News\Container,
    News\Factory\ModelFactory;

class Year
{

    /**
     * リスト用のデータを取得する
     *
     * @author app2641
     **/
    public function getList ($request)
    {
        $container  = new Container(new ModelFactory);
        $year_model = $container->get('YearModel');

        return $year_model->query->fetchAll();
    }



    /**
     * 年代の新規作成
     *
     * @param string $year  年代名
     * @formHandler
     * @author app2641
     **/
    public function create ($request)
    {
        $container  = new Container(new ModelFactory);
        $year_model = $container->get('YearModel');

        $year = $year_model->query->fetchByName($request['year']);
        if ($year) {
            return array('success' => false, 'msg' => 'already exists!');
        }

        $value = $request['year'];
        if (! preg_match('/^[0-9]*$/', $value)) {
            return array('success' => false, 'msg' => 'only integer!');
        }

        $params = new \stdClass;
        $params->name = $request['year'];
        $year_model->insert($params);

        return array('success' => true);
    }
}
