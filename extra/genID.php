<?php
function cloudovh_gnum($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');

        for ($i = 0; $i < 2; $i++) {
                $alpha_key .= $keys[array_rand($keys)];
        }

        $length = $size - 2;

        $key = '';
        $keys = range(0, 9);

        for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
        }

        return $alpha_key . $key;
}

echo cloudovh_gnum(10);
?>
