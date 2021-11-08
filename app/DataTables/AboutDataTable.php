<?php

namespace App\DataTables;

use App\About;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Barryvdh\DomPDF\Facade as PDF;
class AboutDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        $columns = array_column($this->getColumns(), 'data');
        $dataTable = $dataTable
            ->editColumn('title', function ($about) {
                return getMediaColumn($about, 'title');
            })
            ->editColumn('description', function ($about) {
                return getDateColumn($about, 'description');
            })
            ->editColumn('updated_at', function ($about) {
                return getDateColumn($about, 'updated_at');
            })
            ->addColumn('action', 'about.datatables_actions')
            ->rawColumns(array_merge($columns, ['action']));

        return $dataTable;
   
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\About $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(About $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('about-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        $columns = [
            [
                'data' => 'title',
                'title' => trans('lang.about_title'),

            ],
            [
                'data' => 'description',
                'title' => trans('lang.about_description'),

            ],
            [
                'data' => 'updated_at',
                'title' => trans('lang.about_updated_at'),
                'searchable' => false,
            ]
        ];
        return$columns;
    }
    /**
     * Export PDF using DOMPDF
     * @return mixed
     */
    public function pdf()
    {
        $data = $this->getDataForPrint();
        $pdf = PDF::loadView($this->printPreview, compact('data'));
        return $pdf->download($this->filename() . '.pdf');
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'About_' . date('YmdHis');
    }
}
