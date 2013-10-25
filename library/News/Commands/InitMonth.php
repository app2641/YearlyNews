<?php


namespace News\Commands;

use NEWS\Container,
    NEWS\Factory\ModelFactory;

class InitMonth extends Base\AbstractCommand
{

    protected
        $ja = array(
            '1月', '2月', '3月', '4月', '5月', '6月',
            '7月', '8月', '9月', '10月', '11月', '12月'
        ),
        
        $en = array(
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        );


    /**
     * コマンドの実行
     *
     **/
    public function execute (Array $params)
    {
        try {
            $this->initDatabaseConnection();

            $container = new Container(new ModelFactory);
            $month = $container->get('MonthModel');

            foreach ($this->ja as $key => $val) {
                $data = $month->query->fetchByJa($val);

                if (! $data) {
                    $params = new \stdClass;
                    $params->ja = $val;
                    $params->en = $this->en[$key];
                    $month->insert($params);
                }
            }

            $this->log('init!', 'success');
        
        } catch (\Exception $e) {
            $this->errorLog($e->getMessage());
        }
    }



    /**
     * コマンドリストに表示するヘルプメッセージを表示する
     *
     **/
    public static function help ()
    {
        /* write help message */
        $msg = 'Monthテーブルを初期化する';

        return $msg;
    }
}
