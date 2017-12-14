<?php

function string_to_color($str, $image)
{
    $background_color = imagecolorallocate($image, 255, 255, 255);

    $splitted_str = str_split($str, 4);

    $rq_size = $splitted_str[0];
    $last_scheduling_event = $splitted_str[1];

    $color = $background_color;

    if ($rq_size == 0)
    {
        $color = $background_color;
    }
    else if ($rq_size == 1)
    {
	$color = imagecolorallocate($image, 0, 255, 0);
/*
        switch ($last_scheduling_event)
        {
            case -1:
            case 0:
            case 2:
            case 1:
//                $color = imagecolorallocate($image, 75, 197, 92);
//                break;
            case 13:
            case 23:
//                $color = imagecolorallocate($image, 75, 197, 92);
//                break;
            case 14:
            case 24:
                $color = imagecolorallocate($image, 0, 255, 0);
                break;
        }
*/
    }
    else if ($rq_size == 2)
    {
	$color = imagecolorallocate($image, 255, 128, 0);
/*
        switch ($last_scheduling_event)
        {
            case -1:
            case 0:
            case 2:
            case 1:
//                $color = imagecolorallocate($image, 184, 0, 115);
//                break;
            case 13:
            case 23:
//                $color = imagecolorallocate($image, 115, 184, 0);
//                break;
            case 14:
            case 24:
//                $color = imagecolorallocate($image, 0, 115, 184);
//                break;
                $color = imagecolorallocate($image, 255, 128, 0);
                break;
        }
*/
    }
    else if ($rq_size == 3)
    {
        $color = imagecolorallocate($image, 255, 0, 0);
    }
    else if ($rq_size == 4)
    {
        $color = imagecolorallocate($image, 255, 0, 128);
    }
    else if ($rq_size >= 5)
    {
        $color = imagecolorallocate($image, 255, 0, 255);
    }

    return $color;
}

function string_to_color_load($str, $image)
{
    $sstr = substr($str, 8);
    $sstr = $sstr/1000;

/*
    if ($sstr <= 0) return imagecolorallocate($image, 255, 255, 255);
    if ($sstr > 128) return imagecolorallocate($image, 255, 0, 255);

    return imagecolorallocate($image, trim($sstr) * 2, 255 - trim($sstr) * 2, 255);
*/


    if ($sstr <= 0)
        return imagecolorallocate($image, 255, 255, 255);
    else if ($sstr > 0 && $sstr <= 40)
        return imagecolorallocate($image, 205, 255, 255);
    else if ($sstr > 40 && $sstr <= 80)
        return imagecolorallocate($image, 175, 255, 255);
    else if ($sstr > 80 && $sstr <= 250)
        return imagecolorallocate($image, 175, 215, 255);
    else if ($sstr > 250 && $sstr <= 500)
        return imagecolorallocate($image, 175, 175, 255);
    else if ($sstr > 500 && $sstr <= 650)
        return imagecolorallocate($image, 175, 100, 255);
    else if ($sstr > 650 && $sstr <= 800)
        return imagecolorallocate($image, 175, 50, 255);
    else if ($sstr > 800 && $sstr <= 1000)
        return imagecolorallocate($image, 175, 0, 200);
    else if ($sstr > 1000 && $sstr <= 1500)
        return imagecolorallocate($image, 175, 0, 175);
    else if ($sstr > 1500 && $sstr <= 2000)
        return imagecolorallocate($image, 145, 0, 175);
    else if ($sstr > 2000 && $sstr <= 4000)
        return imagecolorallocate($image, 175, 0, 95);
    else if ($sstr > 4000 && $sstr <= 6000)
        return imagecolorallocate($image, 150, 0, 50);
    else if ($sstr > 6000 && $sstr <= 15000)
        return imagecolorallocate($image, 90, 0, 35);
    else if ($sstr > 15000 && $sstr <= 45000)
        return imagecolorallocate($image, 50, 0, 30);

/*
    if ($sstr <= 0)
        return imagecolorallocate($image, 255, 255, 255);
    else if ($sstr > 0 && $sstr <= 100000 )
        return imagecolorallocate($image, 200, 255, 255);
    else if ($sstr > 100000 && $sstr <= 200000)
        return imagecolorallocate($image, 200, 215, 255);
    else if ($sstr > 200000 && $sstr <= 300000)
        return imagecolorallocate($image, 200, 175, 255);
    else if ($sstr > 300000 && $sstr <= 400000)
        return imagecolorallocate($image, 200, 135, 255);
    else if ($sstr > 400000 && $sstr <= 700000)
        return imagecolorallocate($image, 200, 95, 255);
    else if ($sstr > 700000 && $sstr <= 1000000)
        return imagecolorallocate($image, 200, 0, 255);
    else if ($sstr > 1000000 && $sstr <= 1200000)
        return imagecolorallocate($image, 200, 0, 215);
    else if ($sstr > 1200000 && $sstr <= 1500000)
        return imagecolorallocate($image, 200, 0, 135);
    else if ($sstr > 1500000 && $sstr <= 2000000)
        return imagecolorallocate($image, 175, 0, 135);
    else if ($sstr > 2000000 && $sstr <= 3500000)
        return imagecolorallocate($image, 175, 0, 95);
    else if ($sstr > 3500000 && $sstr <= 5000000)
        return imagecolorallocate($image, 145, 0, 85);
    else if ($sstr > 5000000 && $sstr <= 7500000)
        return imagecolorallocate($image, 125, 0, 45);
    else if ($sstr > 7500000 && $sstr <= 10000000)
        return imagecolorallocate($image, 100, 0, 35);
    else if ($sstr > 10000000 && $sstr <= 15000000)
        return imagecolorallocate($image, 65, 0, 25);

*/
}

?>
