<?php

namespace Groovey\Form;

class Html
{
    public function attributes(array $attributes)
    {
        $html = [];
        foreach ($attributes as $key => $value) {
            $element = $this->attributeElement($key, $value);
            if (!is_null($element)) {
                $html[] = $element;
            }
        }

        return count($html) > 0 ? ' '.implode(' ', $html) : '';
    }
    protected function attributeElement($key, $value)
    {
        if (is_numeric($key)) {
            $key = $value;
        }
        if (!is_null($value)) {
            return $key.'="'.$value.'"';
        }
    }

    protected function formatLabel($name, $value)
    {
        return $value ?: ucwords(str_replace('_', ' ', $name));
    }

    public function input($type, $name, $value = null, $options = array())
    {
        $merge   = compact('type', 'value', 'id');
        $options = array_merge($options, $merge);

        return '<input'.$this->attributes($options).'>';
    }

    protected function checkable($type, $name, $value, $checked, $options)
    {
        if ($checked) {
            $options['checked'] = 'checked';
        }

        return $this->input($type, $name, $value, $options);
    }

    protected function option($display, $value, $selected)
    {
        if (is_array($selected)) {
            $selected = in_array($value, $selected) ? 'selected' : null;
        }

        $options = array('value' => $value, 'selected' => $selected);

        return '<option'.$this->attributes($options).'>'.$display.'</option>';
    }

    public function getSelectOption($display, $value, $selected)
    {
        if (is_array($display)) {
            return $this->optionGroup($display, $value, $selected);
        }

        return $this->option($display, $value, $selected);
    }

    protected function optionGroup($list, $label, $selected)
    {
        $html = array();
        foreach ($list as $value => $display) {
            $html[] = $this->option($display, $value, $selected);
        }

        return '<optgroup label="'.$label.'">'.implode('', $html).'</optgroup>';
    }
}
