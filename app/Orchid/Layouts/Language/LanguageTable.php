<?php

namespace App\Orchid\Layouts\Language;

use App\Models\Language;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class LanguageTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'languages';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', __('Id'))
                ->cantHide()
                ->render(function (Language $language) {
                    return $language->getAttributeValue('id');
                }),
            TD::make('name', __('Name'))
                ->cantHide()
                ->render(function (Language $language) {
                    return $language->getAttributeValue('name');
                }),

            TD::make('code', __('Code'))
                ->cantHide()
                ->render(function (Language $language) {
                    return $language->getAttributeValue('code');
                }),

            TD::make('status', __('Status'))
                ->cantHide()
                ->render(function (Language $language) {
                    return $language->getAttributeValue('status');
                }),

        ];
    }
}
