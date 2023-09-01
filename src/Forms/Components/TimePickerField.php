<?php

namespace HusamTariq\FilamentTimePicker\Forms\Components;

use Filament\Forms\Components\Field;

class TimePickerField extends Field
{
    protected string $view = 'filament3-timepicker::components.time-picker-field';

    protected string $okLabel = 'Ok';

    protected string $cancelLabel = 'Cancel';

    /**
     * @param  array  $cancelLabel
     */
    public function cancelLabel(string $cancelLabel): TimePickerField
    {
        $this->cancelLabel = $cancelLabel;

        return $this;
    }

    /**
     * @return string  $cancelLabel
     */
    public function getCancelLabel()
    {
        return $this->cancelLabel;
    }

    /**
     * @param  array  $okLabel
     */
    public function okLabel(string $okLabel): TimePickerField
    {
        $this->okLabel = $okLabel;

        return $this;
    }

    /**
     * @return string  $okLabel
     */
    public function getOkLabel()
    {
        return $this->okLabel;
    }
}
