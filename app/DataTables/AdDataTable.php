<?php
/**
 * File name: AdDataTable.php
 * Last modified: 2020.04.30 at 08:21:08
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2020
 *
 */

namespace App\DataTables;

use App\Ad;
use App\Models\CustomField;
use Barryvdh\DomPDF\Facade as PDF;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class AdDataTable extends DataTable
{
    /**
     * custom fields columns
     * @var array
     */
    public static $customFields = [];

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
            ->editColumn('image', function ($ad) {
                return getMediaColumn($ad, 'image');
            })
            ->editColumn('updated_at', function ($ad) {
                return getDateColumn($ad, 'updated_at');
            })
            ->addColumn('action', 'ads.datatables_actions')
            ->rawColumns(array_merge($columns, ['action']));

        return $dataTable;
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
                'title' => trans('lang.ad_title'),

            ],
            [
                'data' => 'header',
                'title' => trans('lang.ad_header'),

            ],
            [
                'data' => 'position',
                'title' => trans('lang.ad_position'),

            ],
            [
                'data' => 'image',
                'title' => trans('lang.ad_image'),
                'searchable' => false, 'orderable' => false, 'exportable' => false, 'printable' => false,
            ],
            [
                'data' => 'updated_at',
                'title' => trans('lang.ad_updated_at'),
                'searchable' => false,
            ]
        ];

        // $hasCustomField = in_array(Ad::class, setting('custom_field_models', []));
        // if ($hasCustomField) {
        //     $customFieldsCollection = CustomField::where('custom_field_model', Ad::class)->where('in_table', '=', true)->get();
        //     foreach ($customFieldsCollection as $key => $field) {
        //         array_splice($columns, $field->order - 1, 0, [[
        //             'data' => 'custom_fields.' . $field->name . '.view',
        //             'title' => trans('lang.ad_' . $field->name),
        //             'orderable' => false,
        //             'searchable' => false,
        //         ]]);
        //     }
        // }
        return $columns;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ad $model)
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
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['title'=>trans('lang.actions'),'width' => '80px', 'printable' => false, 'responsivePriority' => '100'])
            ->parameters(array_merge(
                config('datatables-buttons.parameters'), [
                    'language' => json_decode(
                        file_get_contents(base_path('resources/lang/' . app()->getLocale() . '/datatable.json')
                        ), true)
                ]
            ));
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
        return 'adsdatatable_' . time();
    }
}