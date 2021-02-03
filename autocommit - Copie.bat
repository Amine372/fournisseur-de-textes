:loop
SendKeys("git add "texte_binaire.txt"" )
SendKeys("{ENTER}")
:boucle  
set /a count = count + 1  
if %count%==30000 goto finboucle  
goto boucle  
:finboucle
SendKeys("$ git commit -m "uib"" )
SendKeys("{ENTER}")
set /a count = count + 1  
if %count%==30000 goto finboucle  
goto boucle  
:finboucle
goto loop
  