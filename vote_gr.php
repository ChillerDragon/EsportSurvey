<?php
    function print_html_main($fail_reason)
    {
        if ($fail_reason != "none")
        {
            echo "<font color=\"red\">$fail_reason</font>";
        }
        echo "
        <!DOCTYPE html>
        <html>
        <head>
        <title>Videospiel Umfrage</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\">
        <link href=\"http://fonts.googleapis.com/css?family=Comfortaa\" rel=\"stylesheet\" type=\"text/css\">
        </head>
        <body>
        <h1>Videospiel Umfrage</h1>
        <form action=\"vote_gr.php\"method=\"post\">
        </br>
        <a>Wie alt sind Sie?</a>
        </br>
        <select name=\"q1\">
         <option value=\"0\" selected></option>
        <option value=\"1\" >jünger als 12</option>
        <option value=\"2\">13-18</option>
        <option value=\"3\">19-30</option>
        <option value=\"4\">älter</option>
        </select>
                </br>
        <a>Wie viel Zeit verbringen Sie mit Videospielen in der Woche?</a>
        </br>
        <select name=\"q2\">
            <option value=\"0\" selected></option>
        <option value=\"1\">weniger als eine Stunde</option>
        <option value=\"2\">2-7 Stunden</option>
        <option value=\"3\">8-45 Stunden</option>
        <option value=\"4\">mehr als 45 Stunden</option>
        </select>
                    </br>
        <a>Welche Spiele spielen Sie am meisten?</a>
            </br>
        <select name=\"q3\">
        <option value=\"0\" selected></option>
        <option value=\"1\">durchmischt</option>
        <option value=\"2\">Sport</option>
        <option value=\"3\">Simulation</option>
        <option value=\"4\">Strategy</option>
        <option value=\"5\">Role play</option>
            <option value=\"6\">Action</option>
            <option value=\"7\">Adventure</option>
            <option value=\"8\">Andere</option>
        </select>
                    </br>
        <a>Wie oft haben Sie bei einem Wettkampfevent teilgenommen, </br>
        welches eine Registrierung oder andere Teilnahmebedingungen benötigte?</a>
        </br>
            <select name=\"q4\">
            <option value=\"0\" selected></option>
            <option value=\"1\">noch nie</option>
            <option value=\"2\">ein zwei Mal</option>
            <option value=\"3\">gelegentlich</option>
            <option value=\"4\">regelmäßig</option>
            </select>
                    </br>
            <a>Haben sie schon einmal in einem Videospiel geschummelt?</a>
            </br>
            <select name=\"q5\">
            <option value=\"0\" selected></option>
            <option value=\"1\">Noch nie</option>
            <option value=\"2\">Einmal</option>
            <option value=\"3\">Selten</option>
            <option value=\"4\">Öfters</option>
            <option value=\"5\">Regelmäßig</option>

            </select>
                    </br>
        </br>
            <a>Wie haben Sie geschummelt?</br>
        (Überspringen Sie diese Frage, wenn Sie noch nie geschummelt haben)</a>
            </br>
            <a>Software - </a>
            <select name=\"q6a\">
            <option value=\"0\" selected>Keine Software</option>
            <option value=\"1\">Installiert/Runtergeladen</option>
            <option value=\"2\">Selbstgemacht</option>
            </select>
                    </br>
            <a>Spielfehler ausgenutzt (Bugusing) - </a>
            <select name=\"q6b\">
            <option value=\"0\" selected>Keine Fehler genutzt</option>
            <option value=\"1\">Aus dem Internet oder von Freunden</option>
            <option value=\"2\">Selbst gefunden</option>
            </select>
                    </br>
            <a>Drogen/Medikamente - </a>
            <select name=\"q6c\">
            <option value=\"0\" selected>Keine Drogen</option>
            <option value=\"1\">Koffein/Energydrinks</option>
            <option value=\"2\">Medikamente zur Konzentrationssteigerung (z.B.: Ritalin und Adderal)</option>
            <option value=\"3\">Andere Substanzen</option>
            </select>
                    </br>
            <a>Andere - </a>
            <select name=\"q6d\">
            <option value=\"0\" selected>Keine anderen Vorgehensweisen</option>
        <option value=\"1\">Von den Entwicklern in das Spiel eingebaute cheats</option>
            <option value=\"2\">Ich habe auf eine Weise geschummelt, die nicht in der Liste ist</option>
            </select>
                    </br>
        </br>
            <a>Was hat Sie dazu bewegt zu schummeln?</br>
        (Überspringen Sie diese Frage, wenn Sie noch nie geschummelt haben)</a>
            </br>
            <select name=\"q7\">
            <option value=\"0\" selected>Ich habe nicht geschummelt</option>
            <option value=\"1\">Ich weiss es nicht</option>
            <option value=\"2\">Die anderen machen das auch</option>
            <option value=\"3\">Ich will Erfolg</option>
            <option value=\"4\">Ich will gewinnen</option>
        <option value=\"5\">Ich will weiterkommen (z.B. endlich neues level spielen)</option>
            <option value=\"6\">Um mit den guten Spielern mithalten zu können</option>
            <option value=\"7\">Das Schummeln selber ist interessant für mich</option>
            <option value=\"8\">Andere Gründe</option>
            </select>
                    </br>
            <a>Wie fühlt es sich an zu schummeln?</br>
        (Überspringen Sie diese Frage, wenn Sie noch nie geschummelt haben)</a>
            </br>
            <select name=\"q8\">
            <option value=\"0\" selected>Ich habe nicht geschummelt</option>
            <option value=\"1\">Sehr gut</option>
            <option value=\"2\">Okay</option>
            <option value=\"3\">Ein bisschen unwohl</option>
            <option value=\"4\">Gewissensbisse</option>
            <option value=\"5\">Sehr schlechtes Gewissen</option>
            </select>
                    </br>
            <a>Was halten Sie von dem Schummeln anderer Teilnehmer?</a>
                </br>
            <select name=\"q9\">
            <option value=\"0\" selected></option>
            <option value=\"1\">Find ich gut</option>
            <option value=\"2\">Ist mir egal</option>
            <option value=\"3\">Nicht toll aber ist halt so</option>
            <option value=\"4\">Geht gar nicht</option>
            </select>
            
        </br>
        <input type=\"submit\"value=\"senden\"></br>
        </form>
        </body>
        </html>
        ";
        die();
    }
    
    
    if (!empty($_POST['q1']) and !empty($_POST['q2']) and !empty($_POST['q3']) and !empty($_POST['q4']) and !empty($_POST['q5']) and !empty($_POST['q9']))
    {
        if (!is_numeric($_POST['q1']) or !is_numeric($_POST['q2']) or !is_numeric($_POST['q3']) or !is_numeric($_POST['q4']) or !is_numeric($_POST['q5']) or !is_numeric($_POST['q6a']) or !is_numeric($_POST['q6b']) or !is_numeric($_POST['q6c']) or !is_numeric($_POST['q6d']) or !is_numeric($_POST['q7']) or !is_numeric($_POST['q8']) or !is_numeric($_POST['q9']))
        {
            print_html_main("Please give valid inputs");
            die();
        }
        #check ip
        $ip=$_SERVER['REMOTE_ADDR'];
        $ip_to_check=$ip;
        $ip_to_check.="\n";
        $handle = fopen("ip.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // process the line read.
                if ($line === $ip_to_check)
                {
                    echo "Sie haben bereits abgestimmt";
                    die();
                }
                else
                {
                    //echo "[$line] not qual to [$ip_to_check]";
                }
            }
            
            fclose($handle);
        } else {
            // error opening the file.
        }
        #save ip
        $ipfile = fopen("ip.txt","a");
        fwrite($ipfile,$ip);
        fwrite($ipfile,"\n");
        fclose($ipfile);
        
        
        
        $q1=stripslashes(htmlspecialchars($_POST['q1']));
        $q2=stripslashes(htmlspecialchars($_POST['q2']));
        $q3=stripslashes(htmlspecialchars($_POST['q3']));
        $q4=stripslashes(htmlspecialchars($_POST['q4']));
        $q5=stripslashes(htmlspecialchars($_POST['q5']));
        $q6a=stripslashes(htmlspecialchars($_POST['q6a']));
        $q6b=stripslashes(htmlspecialchars($_POST['q6b']));
        $q6c=stripslashes(htmlspecialchars($_POST['q6c']));
        $q6d=stripslashes(htmlspecialchars($_POST['q6d']));
        $q7=stripslashes(htmlspecialchars($_POST['q7']));
        $q8=stripslashes(htmlspecialchars($_POST['q8']));
        $q9=stripslashes(htmlspecialchars($_POST['q9']));
            $file=fopen("results.txt","a") or print_html_main("etwas ist schief gelaufen");
                fwrite($file,$q1);
                fwrite($file,";");
                fwrite($file,$q2);
                fwrite($file,";");
                fwrite($file,$q3);
                fwrite($file,";");
                fwrite($file,$q4);
                fwrite($file,";");
                fwrite($file,$q5);
                fwrite($file,";");
                fwrite($file,$q6a);
                fwrite($file,";");
                fwrite($file,$q6b);
                fwrite($file,";");
                fwrite($file,$q6c);
                fwrite($file,";");
                fwrite($file,$q6d);
                fwrite($file,";");
                fwrite($file,$q7);
                fwrite($file,";");
                fwrite($file,$q8);
                fwrite($file,";");
                fwrite($file,$q9);
                fwrite($file,"\n");
                fclose($file);
    echo "
        <!DOCTYPE html>
        <html>
        <head>
        <title>E-Sport survey</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
        <link href=\"http://fonts.googleapis.com/css?family=Comfortaa\" rel=\"stylesheet\" type=\"text/css\">
        </head>
        <body>
        <h1>Videogame poll</h1>
        <a>Thank you for voting.</a>
        </body>
        </html>

    ";
    die();
    }
    else if (!empty($_POST['q1']) or !empty($_POST['q2']) or !empty($_POST['q3']) or !empty($_POST['q4']) or !empty($_POST['q5']) or !empty($_POST['q6a']) or !empty($_POST['q6b']) or !empty($_POST['q6c']) or !empty($_POST['q6d']) or !empty($_POST['q7']) or !empty($_POST['q8']) or !empty($_POST['q9']))
    {
        print_html_main("Fehler: Bitte beantworten Sie alle Fragen</br>Tipp: nutzen Sie den <- Pfeil in ihrem Browser um die alten Antworten wiederherzustellen");
    }
    else #no input values --> print login page
    {
        print_html_main("none");
    }
?>

