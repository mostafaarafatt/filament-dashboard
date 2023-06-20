<?php

namespace App\TableColumns;

use Filament\Tables\Columns\Column;

class ActiveInactiveColumn extends Column
{
    public static function make(string $name, ?string $label = null): self
    {
        return (new static($name))
            ->label($label ?? ucfirst($name));
    }

    public function getDefaultRenderer($record): string
    {
        return $record->is_active == 1 ? 'Active' : 'Inactive';
    }
}