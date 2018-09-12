<?php
/**
 * Tabla de valores
 * I | V | X  |  L |  C  |  D  | M
 * 1 | 5 | 10 | 50 | 100 | 500 | 1000
 * 
 */
function Romano($largo, $entrada)
{
    $resultado = 0;
    for ($i = 0; $i < $largo; $i++) {
        switch ($entrada[$i]) {
            case 'M':
                # Equivale 1000
                $resultado += 1000;
                break;
            case 'D':
                # Equivale 500
                $resultado += 500;
                break;
            case 'C':
                /**
                 * Si delante esta D restamos 1 para hacerlo 400
                 * Si delante esta M restamos 1 para hacerlo 900
                 */
                if ($entrada[$i + 1] == 'D' || $entrada[$i + 1] == 'M') {
                    $resultado -= 100;
                } else {
                    $resultado += 100;
                }
                break;
            case 'L':
                # Equivale 50
                $resultado += 50;
                break;
            case 'X':
                /**
                 * Si delante esta L restamos 10 para hacerlo 40
                 * Si delante esta C restamos 10 para hacerlo 90
                 */

                if (($i + 1) == $largo):
                    $resultado += 10;
                else:
                    if ($entrada[$i + 1] == 'L' || $entrada[$i + 1] == 'C') {
                        $resultado -= 10;
                    } else {
                        $resultado += 10;
                    }
                endif;
                break;
            case 'V':
                # Equivale 5
                $resultado += 5;
                break;
            case 'I':
                /**
                 * Si delante esta V restamos 1 para hacerlo 4
                 * Si delante esta X restamos 1 para hacerlo 9
                 */
                if (($i + 1) == $largo):
                    $resultado += 1;
                else:
                    if ($entrada[$i + 1] == 'V' || $entrada[$i + 1] == 'X') {
                        $resultado -= 1;
                    } else {
                        $resultado += 1;
                    }
                endif;
                break;
        }
    }
    echo "{$resultado}\n";
}
