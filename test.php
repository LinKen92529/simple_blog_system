<?php
$test = [];
$test['test1'] = 'test';
$test['test2'] = '<script>testqqqqqqqqqqq</script>';
$test['test3'] = '<script>testqqqqqqqqqqq</script>';
$test['test4'] = '<script>testqqqqqqqqqqq</script>';
$test['test5'] = '<script>testqqqqqqqqqqq</script>';
$test['test6'] = '<script>testqqqqqqqqqqq</script>';
$test['test7'] = '<script>testqqqqqqqqqqq</script>';
$test['test8'] = '<script>testqqqqqqqqqqq</script>';
if (isset($test)) {
    foreach ($test as $var_name => $var_val) {
             $preg = "/<script[\s\S]*?<\/script>/i";
             $newstr = preg_replace($preg, "", $test[$var_name]);
             echo $newstr;

     } 
}