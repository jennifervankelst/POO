<?php
    class Validator
    {
        public function validate($value, $filter, $options=[]) : boolean
        {
            return filter_var($value, filter, $options);
        }
        public function int(int $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_INT, $options);
        }
        public function string(string $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_STRING, $options);
        }
        public function float(float $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_FLOAT, $options);
        }
        public function boolean(bool $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_BOOLEAN, $options);
        }
        public function email(string $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_EMAIL, $options);
        }
        public function url(string $value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_URL, $options);
        }
        public function ip($value, $options = []) : boolean
        {
            return $this->validate($value, FILTER_VALIDATE_IP, $options);
        }
    }
?>