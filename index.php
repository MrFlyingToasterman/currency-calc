<!DOCTYPE html>

<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css"> -->

        <meta charset="UTF-8">
        <title>currency calc</title>
        <style>
            #content {
                margin-top: 15%;
                width: 350px;
                height: 150px;
                padding-top: 5px;
                background-color: ghostwhite;
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            }

            body {
                background-color: lightgray;
            }

            h6 {
                margin-top: 21%;
                color: darkslategrey;
            }
            
            .boylayout {
                width: 95%;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <?php
            //Block warnings
            error_reporting(0);
            //Check input 
            if (isset($_POST["cb"])) {
                //set radiboxvalue
                $radioboxck = $_POST["cb"];
            }


            //Switch case function to do calc stuff
            switch ($radioboxck) {
                case 0 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro * 1.13;
                        $var1 = " Dollar";
                        $var0 = " Euro";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;

                case 1 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro / 1.13;
                        $var1 = " Euro";
                        $var0 = " Dollar";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;
                    
                    case 2 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro * 115.57;
                        $var1 = " Yen";
                        $var0 = " Euro";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;
                    
                    case 3 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro / 115.57;
                        $var1 = " Euro";
                        $var0 = " Yen";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;
                    
                    case 4 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro * 0.85;
                        $var1 = " Pound";
                        $var0 = " Euro";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;
                    
                    case 5 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro / 0.85;
                        $var1 = " Euro";
                        $var0 = " Pound";
                    } else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                    break;

                default:
                    //Error catch
                    echo 'Error during stuff';
                    break;
            }
            ?>
            <center>
                <div align="center" id="content">

                    <table border="0px">
                        <tr>
                            <td colspan="2"><input type="text" placeholder="Source currency" class="boylayout" name="tf_euro" value="<?php echo round($euro, 2); echo $var0; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" placeholder="Converted currency" class="boylayout" name="tf_dollar" value="<?php echo round($dollar, 2); echo $var1; ?>"></td>
                        </tr>
                        <tr>
                            <td> &nbsp; </td> <td> &nbsp; </td>
                        </tr>
                        <tr>
                            <td> &nbsp; </td> <td> &nbsp; </td>
                        </tr>
                        <tr>
                            <td width="200px">
                                <select name="cb">
                                    <option value="0">Euro to Dollar</option>
                                    <option value="1">Dollar to Euro</option>
                                    <option value="2">Euro to Yen</option>
                                    <option value="3">Yen to Euro</option>
                                    <option value="4">Euro to Pound</option>
                                    <option value="5">Pound to Euro</option>
                                </select>
                            </td> 
                            <td align="right"> <input type="submit"> </td>
                        </tr>
                    </table>

                </div>
            </center>
        </form>
        <h6 align="right">PHP Hallo World by Darius Musiolik 2k16 | GPLv3 free (as in freedom) Software</h6>
    </body>
</html>
