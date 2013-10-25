<?php


namespace News\Factory;


/**
 * Modelクラス群
 *
 * @author app2641
 **/
use NEWS\Model\EntryModel,
    NEWS\Model\MonthModel,
    NEWS\Model\YearModel;


/**
 * Queryクラス群
 *
 * @author app2641
 **/
use NEWS\Model\Query\EntryQuery,
    NEWS\Model\Query\MonthQuery,
    NEWS\Model\Query\YearQuery;


/**
 * Columnクラス群
 *
 * @author app2641
 **/
use NEWS\Model\Column\EntryColumn,
    NEWS\Model\Column\MonthColumn,
    NEWS\Model\Column\YearColumn;

class ModelFactory extends AbstractFactory
{
    
    /////////////////////
    // Model
    /////////////////////
    
    public function buildEntryModel ()
    {
        return new EntryModel;
    }


    public function buildMonthModel ()
    {
        return new MonthModel;
    }


    public function buildYearModel ()
    {
        return new YearModel;
    }
    



    /////////////////////
    // Query
    /////////////////////

    public function buildEntryQuery ()
    {
        return new EntryQuery;
    }


    public function buildMonthQuery ()
    {
        return new MonthQuery;
    }


    public function buildYearQuery ()
    {
        return new YearQuery;
    }
    



    /////////////////////
    // Column
    /////////////////////

    public function buildEntryColumn ()
    {
        return new EntryColumn;
    }


    public function buildMonthColumn ()
    {
        return new MonthColumn;
    }


    public function buildYearColumn ()
    {
        return new YearColumn;
    }
    
}
