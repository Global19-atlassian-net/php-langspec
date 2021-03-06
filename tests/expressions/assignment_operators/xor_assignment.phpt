--TEST--
^= operator
--FILE--
<?php

require __DIR__ . '/common.inc';

foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< ^= >$e2<, result: "; var_dump($e1 ^= $e2);
	}
	echo "-------------------------------------\n";
}

?>
--EXPECTF--
>0< ^= >0<, result: int(0)
>0< ^= >-10<, result: int(-10)
>0< ^= >100<, result: int(100)
>0< ^= >-34000000000<, result: int(-34000000000)
>0< ^= >INF<, result: int(0)
>0< ^= >-INF<, result: int(0)
>0< ^= >NAN<, result: int(0)
>0< ^= >1<, result: int(1)
>0< ^= ><, result: int(0)
>0< ^= ><, result: int(0)
>0< ^= >123<, result: int(123)
>0< ^= >2e+5<, result: int(200000)
>0< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>0< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>0< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-10< ^= >0<, result: int(-10)
>-10< ^= >-10<, result: int(0)
>-10< ^= >100<, result: int(-110)
>-10< ^= >-34000000000<, result: int(33999999990)
>-10< ^= >INF<, result: int(-10)
>-10< ^= >-INF<, result: int(-10)
>-10< ^= >NAN<, result: int(-10)
>-10< ^= >1<, result: int(-9)
>-10< ^= ><, result: int(-10)
>-10< ^= ><, result: int(-10)
>-10< ^= >123<, result: int(-115)
>-10< ^= >2e+5<, result: int(-200010)
>-10< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-10)
>-10< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-10)
>-10< ^= >9223372036854775807<, result: int(-9223372036854775799)
-------------------------------------
>100< ^= >0<, result: int(100)
>100< ^= >-10<, result: int(-110)
>100< ^= >100<, result: int(0)
>100< ^= >-34000000000<, result: int(-33999999900)
>100< ^= >INF<, result: int(100)
>100< ^= >-INF<, result: int(100)
>100< ^= >NAN<, result: int(100)
>100< ^= >1<, result: int(101)
>100< ^= ><, result: int(100)
>100< ^= ><, result: int(100)
>100< ^= >123<, result: int(31)
>100< ^= >2e+5<, result: int(199972)
>100< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(100)
>100< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(100)
>100< ^= >9223372036854775807<, result: int(9223372036854775707)
-------------------------------------
>-34000000000< ^= >0<, result: int(-34000000000)
>-34000000000< ^= >-10<, result: int(33999999990)
>-34000000000< ^= >100<, result: int(-33999999900)
>-34000000000< ^= >-34000000000<, result: int(0)
>-34000000000< ^= >INF<, result: int(-34000000000)
>-34000000000< ^= >-INF<, result: int(-34000000000)
>-34000000000< ^= >NAN<, result: int(-34000000000)
>-34000000000< ^= >1<, result: int(-33999999999)
>-34000000000< ^= ><, result: int(-34000000000)
>-34000000000< ^= ><, result: int(-34000000000)
>-34000000000< ^= >123<, result: int(-33999999877)
>-34000000000< ^= >2e+5<, result: int(-33999937216)
>-34000000000< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-34000000000)
>-34000000000< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-34000000000)
>-34000000000< ^= >9223372036854775807<, result: int(-9223372002854775809)
-------------------------------------
>INF< ^= >0<, result: int(0)
>INF< ^= >-10<, result: int(-10)
>INF< ^= >100<, result: int(100)
>INF< ^= >-34000000000<, result: int(-34000000000)
>INF< ^= >INF<, result: int(0)
>INF< ^= >-INF<, result: int(0)
>INF< ^= >NAN<, result: int(0)
>INF< ^= >1<, result: int(1)
>INF< ^= ><, result: int(0)
>INF< ^= ><, result: int(0)
>INF< ^= >123<, result: int(123)
>INF< ^= >2e+5<, result: int(200000)
>INF< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>INF< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>INF< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-INF< ^= >0<, result: int(0)
>-INF< ^= >-10<, result: int(-10)
>-INF< ^= >100<, result: int(100)
>-INF< ^= >-34000000000<, result: int(-34000000000)
>-INF< ^= >INF<, result: int(0)
>-INF< ^= >-INF<, result: int(0)
>-INF< ^= >NAN<, result: int(0)
>-INF< ^= >1<, result: int(1)
>-INF< ^= ><, result: int(0)
>-INF< ^= ><, result: int(0)
>-INF< ^= >123<, result: int(123)
>-INF< ^= >2e+5<, result: int(200000)
>-INF< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>-INF< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>-INF< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>NAN< ^= >0<, result: int(0)
>NAN< ^= >-10<, result: int(-10)
>NAN< ^= >100<, result: int(100)
>NAN< ^= >-34000000000<, result: int(-34000000000)
>NAN< ^= >INF<, result: int(0)
>NAN< ^= >-INF<, result: int(0)
>NAN< ^= >NAN<, result: int(0)
>NAN< ^= >1<, result: int(1)
>NAN< ^= ><, result: int(0)
>NAN< ^= ><, result: int(0)
>NAN< ^= >123<, result: int(123)
>NAN< ^= >2e+5<, result: int(200000)
>NAN< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>NAN< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>NAN< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>1< ^= >0<, result: int(1)
>1< ^= >-10<, result: int(-9)
>1< ^= >100<, result: int(101)
>1< ^= >-34000000000<, result: int(-33999999999)
>1< ^= >INF<, result: int(1)
>1< ^= >-INF<, result: int(1)
>1< ^= >NAN<, result: int(1)
>1< ^= >1<, result: int(0)
>1< ^= ><, result: int(1)
>1< ^= ><, result: int(1)
>1< ^= >123<, result: int(122)
>1< ^= >2e+5<, result: int(200001)
>1< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(1)
>1< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(1)
>1< ^= >9223372036854775807<, result: int(9223372036854775806)
-------------------------------------
>< ^= >0<, result: int(0)
>< ^= >-10<, result: int(-10)
>< ^= >100<, result: int(100)
>< ^= >-34000000000<, result: int(-34000000000)
>< ^= >INF<, result: int(0)
>< ^= >-INF<, result: int(0)
>< ^= >NAN<, result: int(0)
>< ^= >1<, result: int(1)
>< ^= ><, result: int(0)
>< ^= ><, result: int(0)
>< ^= >123<, result: int(123)
>< ^= >2e+5<, result: int(200000)
>< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< ^= >0<, result: int(0)
>< ^= >-10<, result: int(-10)
>< ^= >100<, result: int(100)
>< ^= >-34000000000<, result: int(-34000000000)
>< ^= >INF<, result: int(0)
>< ^= >-INF<, result: int(0)
>< ^= >NAN<, result: int(0)
>< ^= >1<, result: int(1)
>< ^= ><, result: int(0)
>< ^= ><, result: int(0)
>< ^= >123<, result: int(123)
>< ^= >2e+5<, result: int(200000)
>< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>123< ^= >0<, result: int(123)
>123< ^= >-10<, result: int(-115)
>123< ^= >100<, result: int(31)
>123< ^= >-34000000000<, result: int(-33999999877)
>123< ^= >INF<, result: int(123)
>123< ^= >-INF<, result: int(123)
>123< ^= >NAN<, result: int(123)
>123< ^= >1<, result: int(122)
>123< ^= ><, result: int(123)
>123< ^= ><, result: int(123)
>123< ^= >123<, result: string(3) "   "
>123< ^= >2e+5<, result: string(3) "W"
>123< ^= ><, result: string(0) ""
>123< ^= >abc<, result: string(3) "PPP"
>123< ^= >9223372036854775807<, result: int(9223372036854775684)
-------------------------------------
>2e+5< ^= >0<, result: int(200000)
>2e+5< ^= >-10<, result: int(-200010)
>2e+5< ^= >100<, result: int(199972)
>2e+5< ^= >-34000000000<, result: int(-33999937216)
>2e+5< ^= >INF<, result: int(200000)
>2e+5< ^= >-INF<, result: int(200000)
>2e+5< ^= >NAN<, result: int(200000)
>2e+5< ^= >1<, result: int(200001)
>2e+5< ^= ><, result: int(200000)
>2e+5< ^= ><, result: int(200000)
>2e+5< ^= >123<, result: string(3) "W"
>2e+5< ^= >2e+5<, result: string(4) "    "
>2e+5< ^= ><, result: string(0) ""
>2e+5< ^= >abc<, result: string(3) "SH"
>2e+5< ^= >9223372036854775807<, result: int(9223372036854575807)
-------------------------------------
>< ^= >0<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >-10<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-10)
>< ^= >100<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(100)
>< ^= >-34000000000<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-34000000000)
>< ^= >INF<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >-INF<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >NAN<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >1<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(1)
>< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>< ^= >123<, result: string(0) ""
>< ^= >2e+5<, result: string(0) ""
>< ^= ><, result: string(0) ""
>< ^= >abc<, result: string(0) ""
>< ^= >9223372036854775807<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(9223372036854775807)
-------------------------------------
>abc< ^= >0<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= >-10<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-10)
>abc< ^= >100<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(100)
>abc< ^= >-34000000000<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(-34000000000)
>abc< ^= >INF<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= >-INF<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= >NAN<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= >1<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(1)
>abc< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(0)
>abc< ^= >123<, result: string(3) "PPP"
>abc< ^= >2e+5<, result: string(3) "SH"
>abc< ^= ><, result: string(0) ""
>abc< ^= >abc<, result: string(3) "   "
>abc< ^= >9223372036854775807<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(9223372036854775807)
-------------------------------------
>9223372036854775807< ^= >0<, result: int(9223372036854775807)
>9223372036854775807< ^= >-10<, result: int(-9223372036854775799)
>9223372036854775807< ^= >100<, result: int(9223372036854775707)
>9223372036854775807< ^= >-34000000000<, result: int(-9223372002854775809)
>9223372036854775807< ^= >INF<, result: int(9223372036854775807)
>9223372036854775807< ^= >-INF<, result: int(9223372036854775807)
>9223372036854775807< ^= >NAN<, result: int(9223372036854775807)
>9223372036854775807< ^= >1<, result: int(9223372036854775806)
>9223372036854775807< ^= ><, result: int(9223372036854775807)
>9223372036854775807< ^= ><, result: int(9223372036854775807)
>9223372036854775807< ^= >123<, result: int(9223372036854775684)
>9223372036854775807< ^= >2e+5<, result: int(9223372036854575807)
>9223372036854775807< ^= ><, result: 
Warning: A non-numeric value encountered in %s on line %d
int(9223372036854775807)
>9223372036854775807< ^= >abc<, result: 
Warning: A non-numeric value encountered in %s on line %d
int(9223372036854775807)
>9223372036854775807< ^= >9223372036854775807<, result: int(0)
-------------------------------------
