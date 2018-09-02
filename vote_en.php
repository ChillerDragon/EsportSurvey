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
        <title>Videogame survey</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\">
        <link href=\"http://fonts.googleapis.com/css?family=Comfortaa\" rel=\"stylesheet\" type=\"text/css\">
        </head>
        <body>
        <h1>Videogame survey</h1>
        <form action=\"vote_en.php\"method=\"post\">
        </br>
        <a>How old are you?</a>
        </br>
        <select name=\"q1\">
         <option value=\"0\" selected></option>
        <option value=\"1\" >younger than 12</option>
        <option value=\"2\">13-18</option>
        <option value=\"3\">19-30</option>
        <option value=\"4\">older</option>
        </select>
                </br>
        <a>How much time do you spend on video games per week?</a>
        </br>
        <select name=\"q2\">
            <option value=\"0\" selected></option>
        <option value=\"1\">less than one hour</option>
        <option value=\"2\">2-7h</option>
        <option value=\"3\">8-45h</option>
        <option value=\"4\">more than 45h</option>
        </select>
                    </br>
        <a>Which games do you play most?</a>
            </br>
        <select name=\"q3\">
        <option value=\"0\" selected></option>
        <option value=\"1\">mixed</option>
        <option value=\"2\">sport</option>
        <option value=\"3\">simulation</option>
        <option value=\"4\">strategy</option>
        <option value=\"5\">role play</option>
            <option value=\"6\">action</option>
            <option value=\"7\">adventure</option>
            <option value=\"8\">other</option>
        </select>
                    </br>
            <a>How often did you take part in a tournament</br>
            which required a registration or other joining conditions?</a>
        </br>
            <select name=\"q4\">
            <option value=\"0\" selected></option>
            <option value=\"1\">never</option>
            <option value=\"2\">once or twice</option>
            <option value=\"3\">occasionally</option>
            <option value=\"4\">regularly</option>
            </select>
                    </br>
            <a>Have you ever cheated in a videogame?</a>
            </br>
            <select name=\"q5\">
            <option value=\"0\" selected></option>
            <option value=\"1\">never</option>
            <option value=\"2\">once</option>
            <option value=\"3\">rarely</option>
            <option value=\"4\">on occasion</option>
            <option value=\"5\">regularly</option>
            </select>
                    </br></br>
            <a>How did you cheat? (skip this question if you never cheated)</a>
            </br>
            <a>Software - </a>
            <select name=\"q6a\">
            <option value=\"0\" selected>no software</option>
            <option value=\"1\">installed</option>
            <option value=\"2\">selfmade</option>
            </select>
                    </br>
            <a>Bugusing - </a>
            <select name=\"q6b\">
            <option value=\"0\" selected>no bugusing</option>
            <option value=\"1\">shown by internet or friends</option>
            <option value=\"2\">self explored</option>
            </select>
                    </br>
            <a>Drugs - </a>
            <select name=\"q6c\">
            <option value=\"0\" selected>no drugs</option>
            <option value=\"1\">Coffein/Energydrinks</option>
            <option value=\"2\">drugs to increase concentration (for example Ritalin and Adderal)</option>
            <option value=\"3\">other substances</option>
            </select>
                    </br>
            <a>Other - </a>
            <select name=\"q6d\">
            <option value=\"0\" selected>no other cheats</option>
            <option value=\"1\">Cheats implemented by the developers of the game</option>
            <option value=\"2\">I cheated in a way which is not in the list</option>
            </select>
                    </br>
            </br>
            <a>What made you cheat in a videogame? (skip this question if you never cheated)</a>
            </br>
            <select name=\"q7\">
            <option value=\"0\" selected>I didn't cheat</option>
            <option value=\"1\">I don't know</option>
            <option value=\"2\">Others cheat too</option>
            <option value=\"3\">I want success</option>
            <option value=\"4\">I want to win</option>
            <option value=\"5\">I want to make progress (finally play a new level)</option>
            <option value=\"6\">To keep up with high skilled players</option>
            <option value=\"7\">Cheating itself is interesting for me</option>
            <option value=\"8\">Other reason</option>
            </select>
                    </br>
            <a>How does it feel to cheat? (skip this question if you never cheated)</a>
            </br>
            <select name=\"q8\">
            <option value=\"0\" selected>I didn't cheat</option>
            <option value=\"1\">totally fine</option>
            <option value=\"2\">okay</option>
            <option value=\"3\">a bit uncomfortable</option>
            <option value=\"4\">scruples</option>
            <option value=\"5\">very bad</option>
            </select>
                    </br>
            <a>What do you think about other players cheating?</a>
                </br>
            <select name=\"q9\">
            <option value=\"0\" selected></option>
            <option value=\"1\">I like it</option>
            <option value=\"2\">I don't care</option>
            <option value=\"3\">I tolerate it</option>
            <option value=\"4\">Totally not okay</option>
            </select>
        </br>
        <input type=\"submit\"value=\"submit\"></br>
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
                    echo "you voted already";
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
        $file=fopen("results.txt","a") or print_html_main("something went wrong");
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
        print_html_main("Error: please answer all questions</br>Hint: use <- arrow in browser to restore all old answers");
    }
    else
    {
        print_html_main("none");
    }
?>

