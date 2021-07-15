<?php

namespace PowerComponents\LivewirePowerGrid\Themes;

use Illuminate\Support\Facades\Facade;
use PowerComponents\LivewirePowerGrid\Themes\Components\{Actions,
    Checkbox,
    Cols,
    Editable,
    FilterBoolean,
    FilterDatePicker,
    FilterInputText,
    FilterMultiSelect,
    FilterNumber,
    FilterSelect,
    Layout,
    PerPage,
    Table,
    Toggleable};

/**
 * @method static Table table(string $attrClass, string $attrStyle='')
 * @method static PerPage perPage()
 * @method static Toggleable toggleable()
 * @method static Layout layout()
 * @method static Cols cols()
 * @method static Actions actions()
 * @method static Checkbox checkbox()
 * @method static Editable editable()
 * @method static FilterBoolean filterBoolean()
 * @method static FilterDatePicker filterDatePicker()
 * @method static FilterMultiSelect filterMultiSelect()
 * @method static FilterNumber filterNumber()
 * @method static FilterSelect filterSelect()
 * @method static FilterInputText filterInputText()
 * @see \PowerComponents\LivewirePowerGrid\Themes\ThemeManager
 */
class Theme extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'theme';
    }
}