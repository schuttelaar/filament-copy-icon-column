<?php

namespace Schuttelaar\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Closure;

class CopyIconColumn extends TextColumn
{
    protected string $view = 'filament-segmented-control-field::tables.columns.copy-icon-column';
    protected string | bool | Closure | null $icon = 'heroicon-o-clipboard-document';
    protected bool | Closure $isCopyable = true;
}