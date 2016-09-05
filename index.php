<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>currency calc</title>
        <style>
            #content {
                margin-top: 15%;
                width: 290px;
                height: 130px;
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
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <?php     
            //Block warnings
            error_reporting(0);
            //Check input from radiobox[0 or 1]
            if (isset($_POST["cb"])) {
                //set radiboxvalue
                $radioboxck = $_POST["cb"];
            }
            
            //Switch case function to do calc stuff
            switch($radioboxck) {
                case 0 :
                    //if tf_euro got a value
                    if (isset($_POST["tf_euro"])) {
                        //new var euro = postvale of tf_euro
                        $euro = $_POST["tf_euro"];
                        //new var dollar = var euro * 1.13
                        $dollar = $euro * 1.13;
                    }else {
                        //Leave boxes clean
                        $euro = "";
                        $dollar = "";
                    }
                break;
                
                case 1 :
                    //if tf_dollar got a value
                    if (isset($_POST["tf_dollar"])) {
                        //new var dollar = postvale of tf_euro
                        $dollar = $_POST["tf_dollar"];
                        //new var euro = var euro / 1.13
                        $euro = $dollar / 1.13;
                    }else {
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
                        <td>Euro:</td> <td><input type="text" name="tf_euro" value="<?php echo $euro; ?>"></td>
                    </tr>
                    <tr>
                        <td>Dollar:</td> <td><input type="text" name="tf_dollar" value="<?php echo $dollar; ?>"></td>
                    </tr>
                    <tr>
                        <td> &nbsp; </td> <td> &nbsp; </td>
                    </tr>
                    <tr>
                        <td>€<input type="radio" checked="true" name="cb" value="0"> $<input type="radio" name="cb" value="1"></td> <td align="right"> <input type="submit"> </td>
                    </tr>
                </table>
                
            </div>
            </center>
        </form>
        <h6 align="right">PHP Hallo World by Darius Musiolik 2k16 | GPLv3 free (as in freedom) Software</h6>
    </body>
</html>
