<?php

class CardController
{

    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "bcg");
        if (!$this->con) {
            echo 'Database Connection Error ' . mysqli_connect_error($this->con);
        }
    }

    public function show_info($name, $email, $web)
    {

        $text = "$name $email $web";

        $arrText = explode("\n", wordwrap($text, 20, "\n"));

        $im = @imagecreate(300, 150); //creates an image
        $background_color = imagecolorallocate($im, 255, 255, 255); //sets image background color
        $y = 15; //vertical position of text
        foreach ($arrText as $arr) {
            $textclr = imagecolorallocate($im, 0, 0, 0); //sets text color
            imagestring($im, 5, 15, $y, trim($arr),
                $textclr); //create the text string for image,added trim() to remove unwanted chars
            $y = $y + 40;

        }
        header("Content-type: image/png");
        imagepng($im);
        imagedestroy($im);

        $imginsert = "INSERT INTO details (name,email,web) VALUES ('$name','$email','$web')";
        $imgquery = mysqli_query($this->con, $imginsert);
        return $imgquery;

    }

}