    <?PHP
    function multi($arr) {
        $result = 1;
        foreach ($arr as $elm) {
            $result *= $elm;
        }
        return $result;
    }
    echo multi(array(1, 3, 5 ,7, 9)) . "\n";
    ?>