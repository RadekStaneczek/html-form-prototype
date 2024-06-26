<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100;0,300;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div id="site">
        <div id="container">
            <img src="https://wallpaperbat.com/img/258581-bread-hd-wallpaper-and-background-image.jpg">
            <div class="tint"></div>
            <div id="form_container">
                <div id="header">Dodaj do tabeli</div>

                <form action="form.php" method="POST">

                    <?php 
                    include('init.php');
                        if(true)
                        {
                            $result = $conn->query($sql_);
                            $keys = array_keys($result -> fetch_assoc());
                            foreach($keys as $key => $value)
                            {
                                if(!str_contains($value,"id"))
                                {
                                    echo "<label for='$value'>$value</label><br> <input type='text' name='$value'>";
                                }
                            }
                        }
                    ?>
                    <input type="submit" value="załóż konto"/>
                </form>
                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 240" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L40,12C80,24,160,48,240,80C320,112,400,152,480,148C560,144,640,96,720,68C800,40,880,32,960,28C1040,24,1120,24,1200,48C1280,72,1360,120,1440,124C1520,128,1600,88,1680,60C1760,32,1840,16,1920,40C2000,64,2080,128,2160,164C2240,200,2320,208,2400,212C2480,216,2560,216,2640,204C2720,192,2800,168,2880,148C2960,128,3040,112,3120,112C3200,112,3280,128,3360,120C3440,112,3520,80,3600,72C3680,64,3760,80,3840,88C3920,96,4000,96,4080,80C4160,64,4240,32,4320,24C4400,16,4480,32,4560,32C4640,32,4720,16,4800,44C4880,72,4960,144,5040,144C5120,144,5200,72,5280,64C5360,56,5440,112,5520,112C5600,112,5680,56,5720,28L5760,0L5760,240L5720,240C5680,240,5600,240,5520,240C5440,240,5360,240,5280,240C5200,240,5120,240,5040,240C4960,240,4880,240,4800,240C4720,240,4640,240,4560,240C4480,240,4400,240,4320,240C4240,240,4160,240,4080,240C4000,240,3920,240,3840,240C3760,240,3680,240,3600,240C3520,240,3440,240,3360,240C3280,240,3200,240,3120,240C3040,240,2960,240,2880,240C2800,240,2720,240,2640,240C2560,240,2480,240,2400,240C2320,240,2240,240,2160,240C2080,240,2000,240,1920,240C1840,240,1760,240,1680,240C1600,240,1520,240,1440,240C1360,240,1280,240,1200,240C1120,240,1040,240,960,240C880,240,800,240,720,240C640,240,560,240,480,240C400,240,320,240,240,240C160,240,80,240,40,240L0,240Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,192L40,168C80,144,160,96,240,68C320,40,400,32,480,44C560,56,640,88,720,120C800,152,880,184,960,196C1040,208,1120,200,1200,176C1280,152,1360,112,1440,116C1520,120,1600,168,1680,168C1760,168,1840,120,1920,84C2000,48,2080,24,2160,44C2240,64,2320,128,2400,144C2480,160,2560,128,2640,116C2720,104,2800,112,2880,108C2960,104,3040,88,3120,100C3200,112,3280,152,3360,156C3440,160,3520,128,3600,112C3680,96,3760,96,3840,112C3920,128,4000,160,4080,144C4160,128,4240,64,4320,56C4400,48,4480,96,4560,112C4640,128,4720,112,4800,92C4880,72,4960,48,5040,64C5120,80,5200,136,5280,148C5360,160,5440,128,5520,108C5600,88,5680,80,5720,76L5760,72L5760,240L5720,240C5680,240,5600,240,5520,240C5440,240,5360,240,5280,240C5200,240,5120,240,5040,240C4960,240,4880,240,4800,240C4720,240,4640,240,4560,240C4480,240,4400,240,4320,240C4240,240,4160,240,4080,240C4000,240,3920,240,3840,240C3760,240,3680,240,3600,240C3520,240,3440,240,3360,240C3280,240,3200,240,3120,240C3040,240,2960,240,2880,240C2800,240,2720,240,2640,240C2560,240,2480,240,2400,240C2320,240,2240,240,2160,240C2080,240,2000,240,1920,240C1840,240,1760,240,1680,240C1600,240,1520,240,1440,240C1360,240,1280,240,1200,240C1120,240,1040,240,960,240C880,240,800,240,720,240C640,240,560,240,480,240C400,240,320,240,240,240C160,240,80,240,40,240L0,240Z"></path></svg>
            </div>
        </div>
        <div id="databases">
            <header>TABELE</header>
            <div id="tables">
                <table>
                      <?php
                        include 'database.php';
                        $db = new Database("localhost","root","","szkola",["klasa","uczen","wychowawca"]);

                        $db->DisplayTables();
                      ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>