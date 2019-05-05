<?php

namespace App\DataTables;

use App\Models\ConvictionRecord;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;

class ConvictionRecordDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('action', 'conviction_records.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param ConvictionRecord $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ConvictionRecord $model)
    {
        return $model->newQuery()
            ->join('convicts', 'conviction_records.convict_id', '=', 'convicts.id')
            ->select('conviction_records.*', 'convicts.name', 'convicts.surname', 'convicts.id_card_number');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'data' => 'name',
                'name' => 'name',
                'title' => 'Convict',
            ],
            [
                'data' => 'date_of_conviction',
                'name' => 'date_of_conviction',
                'title' => 'Date of conviction',
            ],
            'court',
            [
                'data' => 'nature_of_offence',
                'name' => 'nature_of_offence',
                'title' => 'Nature of offence',
            ],
            [
                'data' => 'offence_commited_on',
                'name' => 'offence_commited_on',
                'title' => 'Offence committed on',
            ],
            [
                'data' => 'warrant_issued_on',
                'name' => 'warrant_issued_on',
                'title' => 'Warrant issued on',
            ],
            [
                'data' => 'warrant_type',
                'name' => 'warrant_type',
                'title' => 'Warrant type',
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'conviction_recordsdatatable_' . time();
    }
}
