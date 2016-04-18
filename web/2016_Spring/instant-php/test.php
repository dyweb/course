<?php
            function foo($func) {
                $func(1);
            }

            // Lambda
            foo(function ($str) {
                echo $str . '<br>';
            });

            $arr = ['a', 'b', 'c', 'd'];
            // Closure
            foo(function ($index) use ($arr) {
                echo $arr[$index] . '<br>';
            });