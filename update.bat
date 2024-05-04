@echo off
set /a x=0
:loopme
	cls
	echo About to pull from git for the %x% times
	git.exe pull
	set /a x+=1
	timeout /t 5
	git.ext push
	echo About to push from git for the %x% times
	git.exe push
	timeout /t 5
goto loopme