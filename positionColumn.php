<?php

/**
 * Выводит порядковый номер позиции с учетом пагинации
 *
 * @package baseclass_extensions
 * @subpackage grid_columns
 * @author Yuri 'Jureth' Minin <J.Jureth@gmail.com>
 * @version v1.0,2010/11/25
 */
class positionColumn extends CGridColumn {

    public $header = '№ п/п';
    /**
     * Начало отсчета для нумерации.
     * @var integer
     */
    public $base = 1;

    protected function renderDataCellContent($row, $data){
        if ( !empty($this->grid->dataProvider) ){
            $pagination = $this->grid->dataProvider->getPagination();
            echo $pagination->getCurrentPage() * $pagination->getPageSize() + $row + (int) $this->base;
        }else{
            echo $row;
        }
    }

}
